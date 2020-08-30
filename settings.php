<?php
### What Files Not To Show In The List
$ignore_files = [
    '.gitignore',
    '.htaccess',
    '404.php',
    'circle.yml',
    'config.php',
    'deploy.sh',
    'functions.php',
    'index.php',
    'phpinfo.php',
    'robots.txt',
    'search.php',
    'settings.php',
    'view.php',
];

### What Extentsions Not To Show In The List
$ignore_ext = ['htaccess'];

### What Folders Not To Show In The List
$ignore_folders = [
    '.circleci',
    '.well-known',
    'cgi-bin',
    'resources',
    'uploads',
];

### File Extension To Be Parsed As Text
$text_ext = [
    'css',
    'htm',
    'html',
    'js',
    'php',
    'txt',
];

### File Extension To Be Parsed As Image
$image_ext = [
    'bmp',
    'gif',
    'jpeg',
    'jpg',
    'png',
];

### File Extensions Description
$extensions = [
    'ai' => ['Adobe Illustrator Artwork', 'fa-file-o'],
    'avi' => ['AVI Movie', 'fa-file-video-o'],
    'bmp' => ['Bitmap Image', 'fa-file-image-o'],
    'css' => ['Cascading Style Sheet Document', 'fa-file-code-o'],
    'doc' => ['Microsoft Word Document', 'fa-file-word-o'],
    'exe' => ['Application', 'fa-file-o'],
    'fla' => ['Flash Document', 'fa-file-o'],
    'gif' => ['GIF Image', 'fa-file-image-o'],
    'htm' => ['HTML Document', 'fa-file-code-o'],
    'html' => ['HTML Document', 'fa-file-code-o'],
    'ico' => ['Icon', 'fa-file-image-o'],
    'jpg' => ['JPEG Image', 'fa-file-image-o'],
    'js' => ['JScript Script File', 'fa-file-code-o'],
    'mdb' => ['Microsoft Access Database', 'fa-file-o'],
    'mid' => ['MIDI Music', 'fa-file-audio-o'],
    'mov' => ['QuickTime Video Clip', 'fa-file-video-o'],
    'mp3' => ['MPEG Audio Layer 3', 'fa-file-audio-o'],
    'mpeg' => ['MPEG Movie', 'fa-file-video-o'],
    'mpg' => ['MPEG Movie', 'fa-file-video-o'],
    'msi' => ['Windows Installer Package', 'fa-file-o'],
    'pdf' => ['Adobe Acrobat Document', 'fa-file-pdf-o'],
    'php' => ['PHP File', 'fa-file-code-o'],
    'png' => ['PNG Image', 'fa-file-image-o'],
    'ppt' => ['Microsoft PowerPoint Presentation', 'fa-file-powerpoint-o'],
    'psd' => ['Adobe Photoshop Image', 'fa-file-o'],
    'ra' => ['Real Media Audio', 'fa-file-audio-o'],
    'rar' => ['RAR Compressed Archive', 'fa-file-archive-o'],
    'rm' => ['Real Media Video', 'fa-file-video-o'],
    'swf' => ['Flash Movie', 'fa-file-video-o'],
    'tif' => ['Tagged Image Format File', 'fa-file-image-o'],
    'txt' => ['Text Document', 'fa-file-text-o'],
    'wav' => ['Waveform Sound', 'fa-file-audio-o'],
    'wma' => ['Windows Media Audio File', 'fa-file-audio-o'],
    'wmv' => ['Windows Media Video File', 'fa-file-video-o'],
    'xls' => ['Microsoft Excel Worksheet', 'fa-file-excel-o'],
    'zip' => ['Zip Compressed Archive', 'fa-file-archive-o'],
];

### GaMerZ File Explorer Version (Please Do Not Edit This)
define('GFE_VERSION', '2.0.0');