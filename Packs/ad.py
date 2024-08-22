import os

# Define the directory containing the HTML files
directory = '/home/hamza/Packs'

# The script tag to be inserted
script_tag = '<script data-cfasync="false" src="//dcbbwymp1bhlf.cloudfront.net/?wbbcd=1084282"></script>\n'

# Loop through all files in the directory
for filename in os.listdir(directory):
    # Check if the file is an HTML file
    if filename.endswith('.html'):
        file_path = os.path.join(directory, filename)
        
        # Read the content of the file
        with open(file_path, 'r') as file:
            content = file.read()
        
        # Find the position of the closing </head> tag
        head_end_pos = content.find('</head>')
        
        if head_end_pos != -1:
            # Insert the script tag before the closing </head> tag
            new_content = content[:head_end_pos] + script_tag + content[head_end_pos:]
            
            # Write the updated content back to the file
            with open(file_path, 'w') as file:
                file.write(new_content)

print("Script tag inserted into all HTML files in the directory.")
