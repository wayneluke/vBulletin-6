import markdown
import os

# Starting folder path 
start_dir = '/path/to/markdown/root'

for dir_path, dir_names, file_names in os.walk(start_dir):
    for filename in file_names:
        if filename.endswith(".md"):
            filePath = os.path.join(dir_path, filename)  
            
            # Open Markdown file
            f = open(filePath)
            text = f.read()
            
            # Convert Markdown to HTML            
            html = markdown.markdown(text)
            
            # Output HTML file
            out_path = os.path.splitext(filePath)[0] + ".html" 
            new_file = open(out_path, 'w')
            new_file.write(html)
            
            print(f"Converted {filePath} to {out_path}")
            
            # Close files
            f.close()
            new_file.close()
