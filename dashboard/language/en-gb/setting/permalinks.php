<?php
// Heading
$_['heading_title']                       = 'Permalink Settings';

// Text
$_['text_success']                        = 'Success: You have modified permalink settings!';
$_['text_edit']                           = 'Edit Permalink Settings';
$_['text_enabled']                        = 'Enabled';
$_['text_disabled']                       = 'Disabled';
$_['text_domain_settings']                = 'Domain & Base Path';
$_['text_url_structure_settings']        = 'URL Structure';
$_['text_seo_settings']                   = 'SEO URL Settings';
$_['text_redirect_settings']              = 'Redirect Settings';
$_['text_current_url']                    = 'Current Base URL';
$_['text_detected_url']                   = 'Detected Base URL';
$_['text_url_structure_plain']            = 'Plain (No prefix)';
$_['text_url_structure_category']         = 'Category-based';
$_['text_url_structure_custom']           = 'Custom Structure';
$_['text_url_format_none']                = 'None (Clean URLs)';

// Tab
$_['tab_domain']                          = 'Domain';
$_['tab_url_structure']                   = 'URL Structure';
$_['tab_seo']                             = 'SEO';
$_['tab_redirects']                      = 'Redirects';

// Entry
$_['entry_base_domain']                   = 'Base Domain';
$_['entry_base_path']                     = 'Base Path';
$_['entry_url_structure']                 = 'URL Structure';
$_['entry_seo_url']                       = 'SEO URLs';
$_['entry_remove_prefixes']               = 'Remove URL Prefixes';
$_['entry_trailing_slash']                = 'Trailing Slash';
$_['entry_category_url_format']           = 'Category URL Format';
$_['entry_product_url_format']            = 'Product URL Format';
$_['entry_information_url_format']        = 'Information URL Format';
$_['entry_auto_redirect']                 = 'Auto Redirect';
$_['entry_redirect_status']               = 'Redirect Status Code';
$_['entry_database_redirect_repair']      = 'Redirect Database Repair';

// Help
$_['help_domain_settings']                = 'Configure your base domain and path. This is used to generate correct URLs and handle redirects properly.';
$_['help_base_domain']                    = 'Your website domain (e.g., example.com or localhost). Leave empty to auto-detect.';
$_['help_base_path']                     = 'The subdirectory path where OpenCart is installed (e.g., www/opencartly or opencartly). Leave empty for root installation.';
$_['help_url_structure']                  = 'Choose how URLs should be structured. Plain removes all prefixes, Category-based includes category paths.';
$_['help_seo_url']                        = 'Enable SEO-friendly URLs. This makes URLs readable and search-engine friendly.';
$_['help_remove_prefixes']                = 'Remove common prefixes like /catalog/, /information/ from URLs for cleaner SEO URLs.';
$_['help_trailing_slash']                  = 'Add a trailing slash to URLs (e.g., /product-name/ instead of /product-name).';
$_['help_category_url_format']             = 'Choose the URL format for categories. None creates clean URLs without prefix.';
$_['help_product_url_format']             = 'Choose the URL format for products. None creates clean URLs without prefix.';
$_['help_information_url_format']         = 'Choose the URL format for information pages. None creates clean URLs without prefix.';
$_['help_redirect_settings']              = 'Configure automatic redirects from old URLs to new clean URLs.';
$_['help_auto_redirect']                  = 'Automatically create redirects when SEO URLs are changed.';
$_['help_redirect_status']                = 'HTTP status code for redirects. 301 is recommended for SEO (permanent redirect).';
$_['help_database_redirect_repair']       = 'Run background checks on oc_redirects to detect and correct broken or conflicting redirect chains.';

// Placeholder
$_['placeholder_base_domain']             = 'localhost or example.com';
$_['placeholder_base_path']               = 'www/opencartly or leave empty for root';

// Button
$_['button_save']                         = 'Save';
$_['button_back']                         = 'Back';
$_['button_cancel']                       = 'Cancel';

// Error
$_['error_permission']                    = 'Warning: You do not have permission to modify permalink settings!';
$_['error_warning']                       = 'Warning: Please check the form for errors!';
$_['error_base_domain']                   = 'Warning: Invalid domain format!';
$_['error_base_path']                     = 'Warning: Invalid path format! Only alphanumeric characters, hyphens, underscores, and slashes are allowed.';
$_['error_redirect_status']               = 'Warning: Invalid redirect status code!';

