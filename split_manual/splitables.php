<?php
// Read the contents of the large HTML file
$largeHtmlFile = 'vBulletin_Manual.html';
$htmlContent = file_get_contents($largeHtmlFile);

// Split the HTML content by the specified <table> tag
$tables = preg_split('/<table class="headingtable" cellpadding="0" cellspacing="0" border="0" width="100%">/', $htmlContent);

// Iterate through the resulting tables
foreach ($tables as $index => $tableContent) {
    // Define the new file name (e.g., output1.html, output2.html, ...)
    $newFileName = 'output' . ($index + 1) . '.html';
    
    // Add back the <table> tag to the table content
    $tableContent = '<table class="headingtable" cellpadding="0" cellspacing="0" border="0" width="100%">' . $tableContent;
    
    // Write the table content to a new file
    file_put_contents('./output/'.$newFileName, $tableContent);
    
    echo "File '$newFileName' created.\n";
}

echo "Splitting complete.\n";
?>