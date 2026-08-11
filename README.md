# 📝 Registration Form

A simple and responsive **Registration Form** built using **HTML, CSS, JavaScript, and PHP**.  
The project provides a clean glassmorphism-style interface for collecting user information and displaying a registration-success page after submission.

## ✨ Features

- 🧑 **Name** input
- 📧 **Email** input
- 📱 **Phone number** with country-code selection
- 🎂 **Date of Birth** selection
- ⚧️ **Gender** selection
- 🌍 **Country** input
- 💬 **Comments** field
- ✅ Required-field validation
- 🎨 Modern gradient and glassmorphism UI
- 📱 Responsive layout for smaller screens
- 🔐 PHP output escaping using `htmlspecialchars()`
- 🎉 Dedicated registration-success page after submission

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| 🌐 HTML5 | Structure of the registration form |
| 🎨 CSS3 | Styling, gradients, glassmorphism and responsiveness |
| ⚡ JavaScript | Client-side form validation and interaction |
| 🐘 PHP | Processes the submitted form data and displays the success page |

## 📂 Project Structure

```text
registration-form/
│
├── 📄 index.html       # Main registration form
├── 🎨 style.css        # Form styling and responsive design
├── ⚡ script.js        # Client-side validation and interactions
├── 🐘 submit.php       # Displays submitted information
└── 📖 README.md        # Project documentation
```

## 🖥️ Form Fields

The registration form collects the following information:

- **Name** 👤
- **Email** 📧
- **Phone Number** 📱
- **Country Code** 🌐
  - 🇺🇸 USA (+1)
  - 🇮🇳 India (+91)
  - 🇬🇧 UK (+44)
  - 🇦🇺 Australia (+61)
  - 🇯🇵 Japan (+81)
- **Date of Birth** 🎂
- **Gender** ⚧️
- **Country** 🌍
- **Comments** 💬

The form submits the data to `submit.php` using the **POST** method.

## 🎨 UI Design

The interface uses a modern visual style featuring:

- 🌈 Purple-to-teal gradient background
- 🪟 Semi-transparent form container
- ✨ Backdrop blur / glassmorphism effect
- 🌑 Soft shadows
- 🎯 Focus effects on form inputs
- 🖱️ Hover animation on the submit button
- 📱 Responsive adjustments for smaller screens

The styling is defined in `style.css`.

## ⚡ JavaScript Validation

`script.js` contains client-side validation logic for important fields.

The validation includes:

- 👤 Checking whether the name is provided
- 📧 Checking the email format
- 📱 Checking for a 10-digit phone number
- ⚧️ Checking whether a gender is selected
- 📝 Checking required registration fields before submission

The form also prevents submission when required values are missing and displays an alert asking the user to complete the required fields.

## 🐘 PHP Submission

The form in `index.html` sends its data to:

```text
submit.php
```

The PHP page displays a **Registration Successful** message along with the submitted:

- Name
- Email
- Phone
- Date of Birth
- Gender
- Country
- Comments

User-submitted values are passed through PHP's `htmlspecialchars()` before being displayed.

> ⚠️ **Note:** This project currently displays the submitted information; it does not include a database/storage layer.

## 🚀 How to Run

Because the project contains a PHP file, it should be run through a PHP-enabled local/web server rather than opening the HTML file alone.

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/Abhinavaa-S-Kumar/registration-form.git
```

### 2️⃣ Open the Project

```bash
cd registration-form
```

### 3️⃣ Start a PHP Development Server

If PHP is installed on your system:

```bash
php -S localhost:8000
```

### 4️⃣ Open in Your Browser

Visit:

```text
http://localhost:8000
```

🎉 You can now fill in the registration form and submit it.

## 🔄 How It Works

```text
        👤 User
           │
           ▼
   📝 Registration Form
           │
           ▼
    ⚡ Client Validation
           │
           ▼
      📤 POST Request
           │
           ▼
       🐘 submit.php
           │
           ▼
   🎉 Registration Successful
           │
           ▼
      📋 Submitted Data
```

## 📸 Project Preview

You can add screenshots of the registration form to the repository and display them here:

```markdown
![Registration Form](screenshots/registration-form.png)
```

## 🔮 Future Improvements

Some possible improvements for future versions:

- 🗄️ Add MySQL/database storage
- 🔑 Add user authentication
- 🔒 Add stronger server-side validation
- 📧 Add email confirmation
- 🧹 Improve error-message handling
- 📊 Add an admin panel to view registrations
- 🛡️ Add CSRF protection and additional security controls
- 📱 Further optimize the mobile experience

## 🎯 Project Objective

The objective of this project is to create a simple, visually appealing registration interface while demonstrating the integration of:

**HTML + CSS + JavaScript + PHP** 🚀

It is also a useful beginner-friendly project for understanding **form creation, client-side validation, HTTP POST submission, and PHP-based form handling**.

---

### 💡 Built with HTML, CSS, JavaScript & PHP ❤️
