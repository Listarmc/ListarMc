import os

# Define the Google tag to be inserted
google_tag = """<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9H483ZYFD5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9H483ZYFD5');
</script>"""

def insert_google_tag(directory):
    # Iterate over all files in the specified directory
    for filename in os.listdir(directory):
        # Only process .html files
        if filename.endswith(".html"):
            file_path = os.path.join(directory, filename)
            
            with open(file_path, 'r', encoding='utf-8') as file:
                content = file.read()

            # Check if the Google tag is already in the file
            if "G-9H483ZYFD5" not in content:
                # Find the <head> tag and insert the Google tag after it
                head_index = content.find("<head>")
                if head_index != -1:
                    # Insert the Google tag right after the <head> tag
                    new_content = content[:head_index + len("<head>")] + "\n" + google_tag + "\n" + content[head_index + len("<head>"):]
                    with open(file_path, 'w', encoding='utf-8') as file:
                        file.write(new_content)
                    print(f"Inserted Google tag into {filename}")
                else:
                    print(f"No <head> tag found in {filename}")
            else:
                print(f"Google tag already present in {filename}")

# Example usage: replace '/path/to/your/directory' with the actual directory path
insert_google_tag('/home/hamza/Packs')
