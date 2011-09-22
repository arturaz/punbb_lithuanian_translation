<?php

/**
 * Language file for pun_attacnment extension
 *
 * @copyright (C) 2008-2009 PunBB, partially based on Attachment Mod by Frank Hagstrom
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package pun_attachment
 */

if (!defined('FORUM')) die();

// Language definitions for frequently used strings
$lang_attach = array(
//admin
'Display images' => 'Rodyti paveiksliukus',
'Display small' => 'Paveiklsliukai, kurių dydis mažesnis nei nurodytas, bus rodomi žinutės peržiūros ir redagavimo puslapiuose.',
'Disable attachments' => 'Uždrausti bylų įkelimą',
'Display icons' => 'Rodyti ikonas',
'Always deny' => 'Visuomet neleisti',
'Filesize' => 'Bylos dydis',
'Filename' => 'Bylos vardas',
'Max filesize' => 'Maksimalus bylos dydis',
'Max height' => 'Maksimalus aukštis',
'Max width' => 'Maksimalus plotis',
'Manage icons' => 'Ikonų tvarkymas',
'Main options' => 'Pagrindinės parinktys',
'Attachment rules' => 'Prisegamų bylų taisyklės',
'Attachment page head' => 'Prisegta byla <strong>%s</strong>',
'Delete button' => 'Panaikinti',
'Attach button' => 'Prisegti',
'Rename button' => 'Pervadinti',
'Detach button' => 'Atsegti',
'Uploaded date' => 'Įkėlimo data',
'MIME-type' => 'MIME tipas',
'Post id' => 'Žinutės ID',
'Downloads' => 'parsiuntimai',
'New name' => 'Naujas vardas',
'Ascending' => 'Didėjantis',
'Descending' => 'Mažėjantis',

'Create orphans' => 'Palikti našlaičius',
'Orphans help' => 'Prisegtos bylos bus paliktos duomenų bazėje netgi jeigu vartotojas sunaikins žinutę, prie kurios tos bylos buvo prisegtos.',
'Icons help' => 'Skirtingiems bylų tipams skirtos ikonos yra saugomos FORUM_ROOT/extensions/attachment/img/. Norint pridėti arba keisti ikonas, pasinaudokite žemiau esančia forma. Pimame stulpelyje suveskite bylų tipus, antrame - ikonų vardus. PunBB leidžia naudoti png, gif, jpeg, ico formatų ikonas.',


// la
'Attachment' => 'Prisegta byla',
'Size:' => 'Dydis:',
'bytes' => 'baitai',
'Downloads:' => 'Parsiųsta:',
'Kbytes' => ' kilobaitai',
'Mbytes' => ' megabaitai',
'Bytes' => ' baitai',
'Kb' => ' kb',
'Mb' => ' mb',
'B' => ' b',
'Since' => 'Parsiųsta %s kartus nuo %s',
'Never download' => 'byla niekuomet nebuvo parsisiųsta.',
'Since (title)' => 'Parsiųsta %s kartus nuo %s',
'Attachment icon' => 'Prisegtos bylos ikona',

'Number existing' => 'Prisegta byla #<strong>%s</strong>',

//edit.php
'Existing' => 'Prisegtos bylos: ',	//Used in edit.php, before the existing attachments that you're allowed to delete

//attach.php
'Download:' => 'Parsisiųsti:',
'Attachment added' => 'Byla prisegta. Nukreipiama...',
'Attachment delete' => 'Byla panaikinta. Nukreipiama...',

//rules
'Group attach part' => 'Bylų prisegimo leidimai',
'Rules' => 'Prisegimo taisyklės',
'Download' => 'Leisti parsisųsti bylas',
'Upload' => 'Leisti įkelti bylas',
'Delete' => 'Leisti šalinti bylas',
'Owner delete' => 'Leisti šalinti savo bylas',
'Size' => 'Maksimalus bylos dydis',
'Size comment' => 'Maksimalus įkeltos bylos dydis (baitais).',
'Per post' => 'Prisegamų bylų per žinutę',
'Allowed files' => 'Leidžiamos bylos',
'Allowed comment' => 'Jeigu tuščia, leisti visus bylų tipus.',
'File len err' => 'Bylos vardas negali būti ilgesnis nei 255 simboliai',
'Ext len err' => 'Bylos išplėtimas negali būti ilgesnis nei 64 simboliai.',

// Notices
'Wrong post' => 'Tu įvedei neteisingą žinutės ID.',
'Too large ini' => 'Tavo pasirinkta byla buvo per didelė.',
'Wrong icon/name' => 'Įvedei blogą bylos plėtinį arba ikonos vardą.',
'No icons' => 'Neįvedei bylos plėtinio arba ikonos vardo.',
'Wrong deny' => 'Blogas neleidžiamų plėtinių sąrašas.',
'Wrong allowed' => 'Blogas leidžiamų plėtinių sąrašas.',
'Big icon' => 'Ikona <strong>%s</strong> yra per aukšta arba per plati.',
'Missing icons' => 'Trūksta šių ikonų:',
'Big icons' => 'Šios ikonos yra per aukštos arba per plačios:',

'Error: mkdir' => 'Nepavyko sukurti naujo katalogo vardu',
'Error: 0750' => 'su leidimais 0750',
'Error: .htaccess' => 'Nepavyko nukopijuoti .htaccess bylos į naują katalogą vardu',
'Error: index.html' => 'Nepavyko nukopijuoti index.html bylos į naują katalogą vardu',
'Some more salt keywords' => 'Daugiau žodžių druskai',
'Put salt' => 'užrašyk savo druską',
'Attachment options' => 'Prisegamų bylų parinktys',
'Rename attachment' => 'Pervadinti prisegtą bylą',
'Old name' => 'Senas vardas',
'New name' => 'Naujas vardas',
'Input new attachment name' => 'Įvesk naują bylos vardą (be išplėtimo)',
'Attachments' => 'Prisegtos bylos',
'Start at' => 'Pradėti nuo',
'Number to show' => 'Rodyti',
'to' => 'iki',
'Owner' => 'Sąvininkas',
'Topic' => 'Tema',
'Order by' => 'Rikiuoti pagal',
'Result sort order' => 'Rezultatų rikiavimo tvarka',
'Orphans' => 'Našlaičiai',
'Apply' => 'Patvirtinti',
'Show only "Orphans"' => 'Rodyti tik našlaičius',
'Error creating attachment' => 'Klaida prisegant bylą, praneškite forumo administratoriui',
'Use icons' => 'Naudoti ikonas',
'Error while deleting attachment' => 'Klaida pašalinant bylą. Byla nepašalinta.',
'Salt keyword' => 'Salt keyword, replace if you want to',

'Too short filename' => 'Please, enter an unempty filename if you want to rename this attachment.',
'Wrong post id' => 'You have entered a wrong post id. Please, correct it if you want to attach a file to this post.',
'Empty post id' => 'Please, enter an unempty post id if you want to attach this file to the post.',
'Attach error' => '<strong>Warning!</strong> The following errors must be corrected before you can attach a file:',
'Rename error' => '<strong>Warning!</strong> The following errors must be corrected before you can rename the attachment:',

'Edit attachments' => 'Edit attachments',
'Post attachments' => 'Post attachments',
'Image preview' => 'Image preview',

'Manage attahcments' => 'Manage attachments',
'Manage id' => 'Manage attachment %s',

'Permission denied' => 'The directory "FORUM_ROOT/extensions/pun_attachment/attachments" is not writable for a Web server!',
'Htaccess fail' => 'File "FORUM_ROOT/extensions/pun_attachment/attachments/.htaccess" does not exist.',
'Index fail' => 'File "FORUM_ROOT/extensions/pun_attachment/attachments/index.html" does not exist.',
'Errors notice' => 'Following errors have been encountered:',

'Del perm error' => 'You don\'t have the permission to delete this file.',
'Up perm error' => 'You don\'t have the permission to upload a file to this post.',

'Attach limit error' => 'You can add only %s attachments to this post.',
'Ext error' => 'You can\'t add an attachment with "%s" extension.',
'Filesize error' => 'You can\'t upload a file whose size is more than "%s" bytes.',
'Bad image' => 'Bad image! Try uploading it again.',
'Add file' => 'Add file',
'Post attachs' => 'Post\'s attachments',
'Download perm error' => 'You don\'t have the permssions to download the attachments of this post.',
'None' => 'None',

'Id' => 'Id',
'Owner' => 'Owner',
'Up date' => 'Uploaded date',
'Type' => 'Type'

);
