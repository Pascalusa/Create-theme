<?php
//--------------------------------
 // regarder dans un autre theme pour voire twentiy..par exemple
// http://www.geekpress.fr/backup-fichiers-site-sans-plugin/
  

if( !defined('ABSPATH') ) die( 'Merci de ne pas changer cette page directement.' );
// wp_clear_scheduled_hook('backup_website_daily_event');
// On crée la planification de notre tâche quotidienne
add_action( 'wp', 'backup_website_daily_scheduled');
function backup_website_daily_scheduled() {
  
    if( !wp_next_scheduled('backup_website_daily_event') ) {
      wp_schedule_event( time(), 'daily', 'backup_website_daily_event' );
    }
}

add_action( 'backup_website_daily_event', 'do_backup_website' );
function do_backup_website() {
  
$backup_file = 'website-' . date('d-m-Y-G-i-s') ; // nom de larchive du backup
  $backup_dir = 'backup-website'; // nom du dossier ou sera stocker les backup
    $htaccess_file = $backup_dir . '/.htaccess'; // chemin ver le fichier htacess
      $backup_max_life = 604800; // temps maximu de fichier d'un backup-tem en seconde'
  
//   On crée le dossier si il n'exite pas
  if(!is_dir( $backup_dir)) mkdir($backup_dir);
  
//   On ajoute un fichier un fichier .htaccess pour la sécurité
//   et on interdi l'accès au fichier à partir du navigateur
    if( !file_exists($htaccess_file ) ) {
      
      $htaccess_file_content = "Order Allow, Deny\n";
      $htaccess_file_content .= "Deny From all";
      
      file_put_contents ($htaccess_file, $htaccess_file_content);
    }
  
//   ..............................................................................................................
//     Zip dossier automatique
//   ..............................................................................................................
  if( class_exists('ZipArchive') ) {
      class ZipArchive extends ZipArchive {
        public function addDirectory( $dir ) {
          foreach ( glob( $dir . '/*' ) as $file ) {
            is_dir( $file ) ? $this->addDirectory( $file ) : $this->addfile($file);
          
         }
       }
     }
    
     $zip = new ZipRecursif;
     if( $zip->open( $backup_dir . '/' . $backup_file . '.zip', ZipArchive::CREATE) === true)  {
       $zip->addDirectory( './');
       $zip->close();
     }
   }
  //   .....................................................................................................  
 //  On supprime les backup qui datent de plus d'une semaine
//   ..............................................................................................................
     foreach ( glob( $backup_dir . '/*' ) as $file ) {
     if( time() - filentime( $file ) > $backup_max_life )
      unlink( $file );
     }
}


?>