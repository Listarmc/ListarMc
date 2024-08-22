import os
import sys

# Check if directory argument is provided
if len(sys.argv) != 2:
    print("Usage: python update_footer.py /path/to/html/files")
    sys.exit(1)

# Directory containing the HTML files from command-line argument
directory = sys.argv[1]

# New footer content
new_footer = '''
<footer>
    <p>&copy; 2024 ListarMC | <a href="../Privacy Policy.html">Privacy Policy</a></p>
</footer>
'''

def update_footer_in_file(file_path):
    with open(file_path, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # Find the existing footer and replace it
    start_footer = content.find("<footer")
    end_footer = content.find("</footer>") + len("</footer>")
    
    if start_footer != -1 and end_footer != -1:
        content = content[:start_footer] + new_footer + content[end_footer:]
    else:
        # If no existing footer is found, append the new footer at the end
        content = content.strip() + '\n' + new_footer
    
    # Write the updated content back to the file
    with open(file_path, 'w', encoding='utf-8') as file:
        file.write(content)

# Iterate through all files in the directory
for filename in os.listdir(directory):
    if filename.endswith(".html"):
        file_path = os.path.join(directory, filename)
        update_footer_in_file(file_path)
        print(f"Updated footer in: {filename}")

print("Footer update complete.")
