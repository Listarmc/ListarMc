import os

# Define the directory containing the HTML files
directory = '/path/to/your/directory'

# Define the HTML block to add
html_block = '''
<div style="width: 50%; margin: 0 auto; text-align: center;">
    <p>Download Links</p>
    <a href="https://www.buymeacoffee.com/listarMc" target="_blank">
        <button class="btn download-btn orange">
            <img src="placeholder.png" alt="Icon" class="button-icon"> Download
        </button>
    </a>
    <a href="https://example.com/second-download" target="_blank">
        <button class="btn download-btn green">
            <img src="placeholder.png" alt="Icon" class="button-icon"> Download Alternative
        </button>
    </a>
</div>
'''

# Define the part of the HTML to be replaced (if applicable)
search_phrase = '<!-- Replace this block with the new HTML -->'

# Iterate over all files in the directory
for filename in os.listdir(directory):
    if filename.endswith('.html'):
        file_path = os.path.join(directory, filename)
        
        # Read the contents of the file
        with open(file_path, 'r', encoding='utf-8') as file:
            file_contents = file.read()
        
        # Replace the search phrase with the new HTML block
        if search_phrase in file_contents:
            file_contents = file_contents.replace(search_phrase, html_block)
        else:
            # If the search phrase is not found, append the HTML block at the end
            file_contents += '\n' + html_block
        
        # Write the updated contents back to the file
        with open(file_path, 'w', encoding='utf-8') as file:
            file.write(file_contents)

print("HTML files have been updated.")
