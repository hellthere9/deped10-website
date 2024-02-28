<?php
/*
Plugin Name: Enhanced PDF Upload
Description: Restricts file uploads to PDF only and adds additional features.
Version: 1.1
Author: Kurt Bernstein P. Blancia
*/

// Hook into the upload filter
add_filter('wp_handle_upload_prefilter', 'enhanced_pdf_upload_only');

function enhanced_pdf_upload_only($file) {
    // Define allowed file types and extensions
    $allowed_types = array('application/pdf');
    $allowed_ext = array('pdf');

    // Get file extension
    $file_info = pathinfo($file['name']);
    $file_ext = strtolower($file_info['extension']);

    // Check if uploaded file is a PDF
    if (!in_array($file_ext, $allowed_ext) || !in_array($file['type'], $allowed_types)) {
        $file['error'] = 'Sorry, only PDF files are allowed for upload.';
    }

    // Check for additional criteria (e.g., file size limit)
    $max_file_size = 10 * 1024 * 1024; // 10 MB
    if ($file['size'] > $max_file_size) {
        $file['error'] = 'File size exceeds the limit of 10 MB.';
    }

  

    return $file;
}

// custom error message for media library upload
add_filter('upload_bits', 'enhanced_pdf_upload_error_message');

function enhanced_pdf_upload_error_message($bits) {
    global $upload_error;

    // Check if there's an upload error
    if (!empty($upload_error)) {
        // Append custom error message
        $upload_error .= ' Please ensure you are uploading a PDF file.';
    }

    return $bits;
}

// Customize media library error message
add_filter('post_updated_messages', 'enhanced_pdf_upload_media_library_message');

function enhanced_pdf_upload_media_library_message($messages) {
    $messages['attachment']['error'] = 'File not uploaded. Please ensure you are uploading a PDF file.';

    return $messages;
}
?>
