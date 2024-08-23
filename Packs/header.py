import os

# Define the directory where your HTML files are located
directory = '/home/hamza/Packs'  # Replace with the correct path

# Define the old and new HTML code blocks
old_code = '''
    <header>
        <div class="navbar" id="myNavbar">
            <a href="../index.html" class="active">Home</a>
            <a href="../index.html#packs">Texture Packs</a>
            <a href="#photos">Features</a>
            <a href="#information">Information</a>
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
'''

new_code = '''
    <header>
        <div class="navbar" id="myNavbar">
            <a href="https://listar-mc.net/index.html" class="active">Home</a>
            <a href="https://listar-mc.net/index.html#packs">Texture Packs</a>
            <a href="#photos">Features</a>
            <a href="#information">Information</a>
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
'''

# Iterate over all files in the directory
for filename in os.listdir(directory):
    if filename.endswith(".html"):
        filepath = os.path.join(directory, filename)
        
        # Read the file content
        with open(filepath, 'r', encoding='utf-8') as file:
            file_content = file.read()
        
        # Replace the old HTML code with the new one
        new_content = file_content.replace(old_code, new_code)
        
        # Write the new content back to the file
        with open(filepath, 'w', encoding='utf-8') as file:
            file.write(new_content)

        print(f'Replaced content in: {filename}')
