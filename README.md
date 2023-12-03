# Dynamic Random Announcement Loader

This GitHub repository features a dynamic random announcement loader implemented in JavaScript (JS) and PHP. The purpose of this code is to display a random announcement from a list retrieved through an API call. The announcements are fetched using PHP, and the random selection is performed on the client side using JavaScript.
You need to create a div in your header with class named as annoucemnet or change it as you like.
## Key Components

### JavaScript (custom.js)
- **Random Announcement Loader:**
  - The `loadRandomAnnouncement` function fetches a random announcement from the server using the `get_random_announcement.php` script.
  - The selected announcement is then displayed on the webpage within an element with the class 'announcement'.
- **Initialization:**
  - The event listener ensures that the random announcement is loaded one second after the DOM content has been fully loaded.

### PHP (get_random_announcement.php)
- **Announcement Retrieval:**
  - The PHP script uses the 'GetAnnouncements' API command to retrieve a list of announcements.
  - A random announcement is selected from the list, and its title and ID are extracted.
- **Display Markup:**
  - The selected announcement's title is displayed on the webpage along with a link to read the full article.

## Usage

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/random-announcement-loader.git
   ```

2. **Integration:**
   - Incorporate the provided JavaScript and PHP files into your project.

3. **Server Requirements:**
   - Ensure that your server supports the necessary PHP functionalities.

4. **Customization:**
   - Customize the PHP script if needed, and adjust the HTML markup where the announcement is displayed.

5. **Deployment:**
   - Deploy the solution to enable a dynamic random announcement loader on your website.

## Note
This code adds a dynamic news option to the header, displaying a random announcement. Feel free to adapt and enhance the functionality based on your specific requirements.

## License

This project is licensed under the [MIT License](LICENSE). Contributions and feedback are welcome!