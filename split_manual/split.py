from bs4 import BeautifulSoup
import os

# Check if the input file is provided
if len(sys.argv) != 2:
    print("Usage: python split_html.py input.html")
    sys.exit(1)

input_file = sys.argv[1]

# Check if the input file exists
if not os.path.isfile(input_file):
    print("Input file does not exist.")
    sys.exit(1)

# Create a directory to store the output files
output_dir = "split_html"
os.makedirs(output_dir, exist_ok=True)

# Read the HTML content
with open(input_file, "r") as file:
    html_content = file.read()

# Parse the HTML using BeautifulSoup
soup = BeautifulSoup(html_content, 'html.parser')

# Find all H1 tags with attributes
h1_tags = soup.find_all("h1")

# Split the HTML file based on H1 tags
for h1_tag in h1_tags:
    # Extract H1 content and create a new file
    h1_content = h1_tag.get_text().strip()
    file_name = os.path.join(output_dir, f"{h1_content}.html")

    # Write the contents between H1 tags to the new file
    with open(file_name, "w") as output_file:
        output_file.write(str(h1_tag) + h1_tag.find_next_siblings(text=True))

print("HTML file has been split into individual files in the 'split_html' directory.")
