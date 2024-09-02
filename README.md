# TRPortfolio Installation Guide

## Requirements & Directory Permissions

Ensure your server meets the following requirements before installation:

- PHP 7.4+
- Extensions: cURL, OpenSSL, mbstring, MySQLi, json
- Database: MySQL 5.7.3+ or MariaDB equivalent
- Server: Apache or Nginx
- Write permissions for:
  - `../include/config.php`
  - `../include/init.php`
  - `database/install.sql`

## Installation Process

The installation should take approximately 10 minutes if followed correctly.

### 1. Prepare the Database

#### Create a New Database

- For localhost (XAMPP):
  ![XAMPP Database Creation](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/3.png)

- For hosting:
  ![Hosting Database Step 1](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/28.png)

### 2. Upload the Product

Upload the contents of the `product/` folder to your webhost. The product can be installed on a subdomain, domain, or subfolder as needed.

### 3. Start the Installation

1. Access `domain.com/install` on your website.
2. Follow the installation steps:

   - Step 1:
     ![Installation Step 1](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/1.png)

   - Step 2:
     ![Installation Step 2](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/2.png)

   - Step 3:
     ![Installation Step 3](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/4.png)

   - Step 4:
     ![Installation Step 4](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/5.png)

3. Completion:
   ![Installation Complete](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/6.png)

### 4. Configuration

- Access the admin panel at `domain.com/admin`
- Login page:
  ![Admin Login](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/12.png)

- After successful login:
  ![Admin Dashboard](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/13.png)

#### Password Recovery

If you forget your password:

1. Access phpMyAdmin for your hosting
2. Navigate to the `admin_users` table:
   ![phpMyAdmin Table](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/32.png)
   ![Password Reset](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/50.png)

3. Change the password to: `74c57834bb95695b01e6e29292bbb9be` (equals `001144az@`)

#### Changing Admin Panel URL

To change the admin panel URL from `domain.com/admin`:

1. Rename the `admin` folder to your desired name
   ![Rename Admin Folder](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/33.png)

## Screenshots

![TRPortfolio Overview](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/TRPortfoliotr.png)

### Additional Screenshots

<details>
<summary>Click to view more screenshots</summary>

![Screenshot 1](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/6.png)
![Screenshot 2](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/7.png)
![Screenshot 3](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/8.png)
![Screenshot 4](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/9.png)
![Screenshot 5](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/10.png)
![Screenshot 6](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/11.png)
![Screenshot 7](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/12.png)
![Screenshot 8](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/13.png)
![Screenshot 9](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/14.png)
![Screenshot 10](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/15.png)
![Screenshot 11](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/16.png)
![Screenshot 12](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/17.png)
![Screenshot 13](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/18.png)
![Screenshot 14](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/19.png)
![Screenshot 15](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/20.png)
![Screenshot 16](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/21.png)
![Screenshot 17](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/22.png)
![Screenshot 18](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/23.png)
![Screenshot 19](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/24.png)
![Screenshot 20](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/25.png)
![Screenshot 21](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/26.png)
![Screenshot 22](https://raw.githubusercontent.com/TerminalDZ/TRPortfolio/main/image/27.png)

</details>

## Contact

If you encounter any issues, please contact:

- **Email**: boukemoucheidriss@gmail.com
- **WhatsApp**: +213558601124
- **Instagram**: @idriss_boukmouche
