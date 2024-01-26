#!/bin/bash

# Check if the input file is provided as an argument
if [ $# -ne 1 ]; then
  echo "Usage: $0 input.html"
  exit 1
fi

input_file="$1"

# Check if the input file exists
if [ ! -f "$input_file" ]; then
  echo "Input file does not exist."
  exit 1
fi

# Create a directory to store the output files
output_dir="split_html"
mkdir -p "$output_dir"

# Use awk to split the HTML file based on H1 tags with attributes
awk -v RS='<h1[^>]*>' 'NR > 1 {print "<h1" $0 > "'"$output_dir"'/temp.html"}' "$input_file"

# Rename the temporary files to use the H1 tag content as the filename
for file in "$output_dir"/*.html; do
  h1_content=$(sed -n 's/.*<h1[^>]*>\(.*\)<\/h1>.*/\1/p' "$file")
  new_file="$output_dir/$h1_content.html"
  mv "$file" "$new_file"
done

echo "HTML file has been split into individual files in the '$output_dir' directory."
