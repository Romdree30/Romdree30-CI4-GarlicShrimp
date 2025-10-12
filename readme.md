<a name="readme-top"></a>

<br/>
<br/>

<div align="center">
  <a href="https://github.com/Romdree30/Romdree30-CI4-GarlicShrimp.git">
    <img src="./assets/img/nyebe_white.png" alt="Nyebe" width="130" height="100">
  </a>
<!-- * Title Section -->
  <h3 align="center">Garlic Shrimp Co.</h3>
</div>

<!-- * Description Section -->
<div align="center">
Garlic Shrimp Co. is a modern, responsive website built with CodeIgniter 4 and Tailwind CSS. It showcases our delicious garlic shrimp dishes, allows users to create accounts via Firebase authentication, and explores features like mood boards, roadmaps, and dynamic content cards. This project demonstrates a clean integration of backend and frontend for fast prototyping and learning.
</div>
</div>

<br/>

![](https://visit-counter.vercel.app/counter.png?page=https://github.com/Romdree30/Romdree30-CI4-GarlicShrimp.git)

<!-- ! Make sure it was similar to your github -->

---

<br/>
<br/>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rules-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

This project is a **modern web application for Garlic Shrimp Co.**, built using CodeIgniter 4 for the backend and Tailwind CSS for the frontend. 
It features user authentication via Firebase, interactive UI components like cards and buttons, and dynamic content sections such as mood boards and roadmaps.

* **Purpose**: Showcase Garlic Shrimp Co.'s menu and features while providing a clean, responsive interface for users.
* **Audience**: Restaurant website visitors, developers learning CI4, and teams exploring frontend-backend integration.


### Key Components

| Component                | Purpose                                                         | Notes                                                       |
| ------------------------ | --------------------------------------------------------------- | ----------------------------------------------------------- |
| **Authentication**       | User sign up, login, and session handling.                     | Uses Firebase Authentication; supports custom tokens and anonymous login. |
| **Cards (Type 1–4)**     | Display menu items, inspirations, and highlights dynamically.  | Each card type has unique layout and hover effects; reusable component via PHP partials. |
| **Buttons (Type 1–4)**   | Reusable buttons for actions like ordering or navigation.       | Styled with Tailwind; supports gradients, hover, and disabled states. |
| **Pages / Views**        | Landing, Moodboard, Roadmap, Sign Up, and Login pages.          | Managed via CI4 Controllers (`Users` & `Auth`) and route definitions. |
| **Firebase Firestore**   | Stores user profile and app-specific data.                     | On login, real-time snapshot updates user info dynamically. |
| **Header & Footer**      | Site-wide navigation and branding.                              | Dark mode enabled; responsive layout for desktop and mobile. |
| **Hero Section**         | Landing page banner with shrimp image and call-to-action.      | Uses absolute positioning, overlay, and Tailwind utilities for text styling. |
| **Responsive & Dark Mode** | Full mobile-friendly support and theme toggle.               | Tailwind CSS classes handle responsive sizing, spacing, and colors. |

 <!-- ! Start simple. Use these modules as **learning samples**; extend or replace them based on your project’s needs. -->

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework / Library

![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)

#### Database / Backend Services

![Firebase](https://img.shields.io/badge/Firebase-FFCA28?style=for-the-badge&logo=firebase&logoColor=black)


<!-- ! Keep only the used technology -->

---

## Quick Start (Docker)

Run the development stack and the app (rebuild if needed):

```cmd
docker compose up --watch
```

Common utility commands (run inside the project root):

- Run migrations:
```cmd
docker compose exec php composer migrate
```
- Run seeders:
```cmd
docker compose exec php composer seed
```
- Run tests:
```cmd
docker compose exec php composer test
```

- Create a migration (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:migration CreateUsersTabel
```

- Create a model (using CodeIgniter's spark tool):

```cmd
docker compose exec php php spark make:model UsemModel
```

- Create an entity (value object for a single record) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:entity Uzer
```

- Create a controller (add --resource to scaffold resourceful methods if you like) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:controller Usars
```

- Create a seeder (for test/dev data) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:seeder UserzSeeder
```

If you prefer, you can include `-f "compose.yaml"` explicitly; the shorter commands above work when running from the repo root.

## Ports & Database

Defaults used in this project (host mapping):

| Service     | Host port |
|-------------|-----------:|
| nginx (app) | 8090      |
| phpMyAdmin  | 8091      |
| MySQL       | 3390      |

Database credentials used in examples and CI:

- Host: localhost
- Port: 3390
- Database: app
- User: root
- Password: root

Be careful: seeding and truncating are destructive operations — run only on local/dev environments unless you know what you're doing.

## Rules, Practices and Principles

<!-- ! Dont Revise this -->

1. Always prefix project titles with `AD-`.
2. Place files in their **respective CI4 folders** (`Controllers/`, `Services/`, `Repositories/`, `Views/`).
3. Naming conventions:

   | Type             | Case        | Example                   |
   | ---------------- | ----------- | ------------------------- |
   | Classes          | PascalCase  | `UserService.php`         |
   | Interfaces       | PascalCase  | `UserRepositoryInterface` |
   | DB tables/fields | snake\_case | `users`, `created_at`     |
   | Docs             | kebab-case  | `dev-manual.md`           |

4. Git commits use: `feat`, `fix`, `docs`, `refactor`.
5. Use **Controller → Service → Repository** pattern.
6. Assets (CSS/JS/img) live under `public/`.
7. Docker configs are at the repo root (`docker-compose.yml`, `nginx.conf`).
8. Docs are maintained in `/docs` (dev, technical, sop, commit, principles, copilot).

Example structure:

```
AD-ProjectName/
├─ backend/ci4/
│  ├─ app/Controllers/
│  ├─ app/Services/
│  ├─ app/Repositories/
│  ├─ app/Views/
│  ├─ public/
│  ├─ writable/
│  ├─ .env
│  └─ composer.json
├─ docker/               # Docker configs at root
├─ docs/                 # Manuals and project docs
├─ .gitignore
└─ readme.md
```

<!-- ! Dont Revise this -->

---

## Resources

| Title                   | Purpose                                                               | Link                                                                       |
| ----------------------- | --------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| ChatGPT                 | General AI assistance for planning application architecture and docs. | [https://chat.openai.com](https://chat.openai.com)                         |
| GitHub Copilot          | In-IDE code suggestions and boilerplate generation.                   | [https://github.com/features/copilot](https://github.com/features/copilot) |
| YouTube “UI/UX Design”  | Video tutorials on modern web interface layouts and patterns.         | [https://www.youtube.com](https://www.youtube.com)                         |
| Pinterest Design Boards | Inspiration for color schemes, typography, and component layouts.     | [https://www.pinterest.com](https://www.pinterest.com)                     |
| Google Photos (Assets)  | Stock imagery and graphics used in UI mockups and documentation.      | [https://photos.google.com](https://photos.google.com)                     |
| System Documentation    | Internal docs from PHP, MongoDB, and PostgreSQL used in development.  | — (see `/docs` folder in repo)                                             |

<!-- ! Add what tools aided you -->
