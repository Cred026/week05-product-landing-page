# ITST 302 - Client-Server Technologies
## Week 5 Laboratory Activity
### Mini Project 04: Responsive Product Landing Page using Laravel, Tailwind CSS, and Blade Components

**Reference Document:** "Week 5.pdf"

---

## Course Information

| Item | Details |
| :--- | :--- |
| **Course** | ITST 302-Client-Server Technologies |
| **Week** | Week 5 |
| **Module** | Module 1-Frontend Development with Laravel |
| **Topic** | Blade Components, Tailwind CSS, Responsive Design, and Reusable UI |
| **Mini Project** | MP04-Responsive Product Landing Page |
| **Project Type** | Individual |
| **Points** | 100 Points |
| **Submission** | GitHub Repository + Documentation + LinkedIn Portfolio + LMS |

---

## Activity Overview
In today's web development industry, the landing page is one of the most valuable digital assets for businesses. It serves as the first impression of a product or service and plays a critical role in attracting customers, increasing engagement, and improving conversion rates.

As a Laravel developer, creating responsive, reusable, and maintainable user interfaces is an essential skill. Rather than repeating HTML code across multiple pages, modern Laravel applications use Blade Components to build modular interfaces, while Tailwind CSS enables developers to rapidly create professional, responsive designs.

In this laboratory activity, students will design and develop a modern Product Landing Page for a technology product or startup using Laravel, Blade Components, and Tailwind CSS. Students are encouraged to follow modern UI/UX principles inspired by platforms such as Apple, Stripe, Notion, or Linear, while maintaining originality.

This project emphasizes component-based development, responsive design, and clean user interface architecture skills highly valued in the software industry.

---

## Intended Learning Outcomes (ILO)
At the end of this laboratory activity, students should be able to:
1. Develop responsive web interfaces using Tailwind CSS.
2. Create reusable Blade Components to eliminate duplicated code.
3. Apply responsive design principles for desktop, tablet, and mobile devices.
4. Organize frontend components following Laravel best practices.
5. Implement consistent UI design using typography, spacing, colors, and layouts.
6. Document frontend architecture and reusable component design.
7. Publish a professional portfolio project through GitHub and LinkedIn.

---

## Learning Objectives
Upon completion of this activity, students will:
* Build responsive interfaces using Tailwind CSS.
* Understand component-based frontend architecture.
* Create reusable Laravel Blade Components.
* Apply responsive layouts using Flexbox and Grid.
* Continue building their professional portfolio.

---

## Mini Project: Responsive Product Landing Page

### Scenario
Look around your community - Find an existing real business that you can observe or research. It can be a small shop, barber shop, salon, restaurant, café, clothing store, food business, repair shop, online seller, family business, or even your own existing business.

* **Your task** is to create a modern landing page for that real business using Laravel.
* **The goal** is to transform the business's existing information, products, services, and brand identity into a clean, responsive, and professional landing page that can help the business present itself better online.

---

### Required Sections
Your landing page must include the following sections:

#### 1. Navigation Bar
* Company Logo
* Home
* Features
* Pricing
* Testimonials
* Contact
* Sign In Button
* Get Started Button

#### 2. Hero Section
* Product Name
* Catchy Headline
* Short Product Description
* Primary Call-to-Action Button
* Secondary Button
* Product Illustration or Mockup

#### 3. Features Section
Display at least six (6) product features. Each feature should include:
* Icon
* Feature Title
* Short Description

#### 4. Product Showcase
* Product Screenshot
* Dashboard Preview
* Mobile View
* Key Highlights

#### 5. Pricing Section
Include at least three pricing plans (e.g., Starter, Professional, Enterprise). Each card should display:
* Plan Name
* Price
* Included Features
* Subscribe Button

#### 6. Testimonials
Include at least three customer testimonials. Each card should contain:
* Customer Photo
* Name
* Position
* Review

#### 7. Call-to-Action Section
Encourage users to:
* Register
* Contact Sales
* Start Free Trial

#### 8. Footer
* Company Information
* Quick Links
* Social Media Icons
* Contact Information
* Copyright

---

### Technical Requirements

#### Laravel Blade Components
The following UI elements must be reusable components:

```text
components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
└── footer.blade.php
```
*Students are encouraged to create additional components as needed.*

#### Tailwind CSS
The landing page must use:
* Responsive Grid
* Flexbox
* Utility Classes
* Responsive Breakpoints
* Hover Effects
* Shadows
* Rounded Corners
* Spacing Utilities

#### Responsive Design
The landing page must be optimized for:
* Desktop
* Laptop
* Tablet
* Mobile Phone

*Students should test responsiveness using browser developer tools.*

#### Laravel Layouts
Use:
```text
layouts/
└── app.blade.php
```
*All pages must extend the main layout.*

---

### Project Structure
```text
week05-product-landing-page/
├── app/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── components/
│   │   └── pages/
├── public/
├── screenshots/
├── documentation/
└── README.md
```

---

### GitHub Repository

* **Repository Name:** `week05-product-landing-page`
* **Visibility:** Public
* **Git Requirements:** Minimum of 10 meaningful commits.

**Example commit messages:**
```text
feat: create landing page layout
feat: build responsive navbar
feat: create reusable hero component
feat: build feature cards
feat: implement pricing section
feat: add testimonials
style: improve responsive spacing
refactor: optimize Blade components
docs: update README
docs: upload screenshots
```

---

### Documentation Requirements (`README.md`)
The README must contain the following sections:

1. **Project Title**
2. **Introduction** (Explain what a landing page is, its importance, and project purpose)
3. **Objectives** (List achieved learning objectives)
4. **Responsive Web Design** (Discuss Mobile-First, Breakpoints, Flexbox, Grid, UX)
5. **Tailwind CSS** (Explain Utility-First CSS, advantages, responsiveness, component styling with examples)
6. **Blade Components** (Discuss what they are, why they improve maintainability, benefits of modular UI with snippets)
7. **User Interface Design** (Describe Color Palette, Typography, Iconography, Buttons, Cards, Layout Consistency)
8. **Folder Structure** (Explain the purpose of key directories like `views/layouts`, `public`, `screenshots`, etc.)
9. **Screenshots** (Desktop, Tablet, Mobile, Navbar, Hero, Features, Pricing, Testimonials, Footer, Blade Components folder, GitHub Repo)

---

### Design Requirements
Students are encouraged to:
* Follow a modern design system.
* Maintain consistent spacing and typography.
* Use a limited and harmonious color palette.
* Ensure sufficient color contrast for accessibility.
* Avoid copying existing websites directly.

#### Before-and-After Comparison
Students must document the evolution of their interface.
* **Before:** Initial wireframe, early prototype, or basic layout before styling.
* **After:** Final polished responsive interface, improved visual hierarchy and usability.
*Save comparison images in the `documentation/` folder.*

#### Screenshots Folder
Include screenshots of:
* Before Design
* After Design
* Desktop Layout
* Tablet Layout
* Mobile Layout
* Navigation Bar
* Hero Section
* Features Section
* Pricing Cards
* Testimonials
* Footer
* VS Code Project Structure
* Blade Components Folder
* GitHub Repository

---

### LinkedIn Portfolio Activity
Students will publish a professional LinkedIn post documenting their Week 5 project.

**Required Content:**
* Brief overview of the landing page project.
* Skills learned (Tailwind CSS, Blade Components, Responsive Design, UI/UX).
* Before-and-after screenshots.
* GitHub repository link.
* Reflection (2-3 sentences).

**Sample Post:**
> **Week 5 - Client-Server Technologies**
> This week, I designed and developed a Responsive Product Landing Page using Laravel, Tailwind CSS, and Blade Components. I focused on creating a modern, reusable, and mobile-friendly interface while applying responsive design principles and component-based development.
>
> Comparing my initial prototype with the final version showed how thoughtful UI improvements can enhance user experience and maintainability.
> 
> Before & After Screenshots Attached
> GitHub Repository: (Insert Link)
> 
> #Laravel #TailwindCSS #ResponsiveDesign #BladeComponents #WebDevelopment #UIUX #GitHub #ClientServer

---

### Submission Checklist
Before submitting, ensure that you have:
- [ ] Responsive landing page completed
- [ ] All required sections implemented
- [ ] Blade Components created and reused
- [ ] Tailwind CSS used throughout the project
- [ ] Desktop, tablet, and mobile layouts tested
- [ ] Public GitHub repository
- [ ] Minimum of 10 meaningful Git commits
- [ ] Complete `README.md` documentation
- [ ] Before-and-after comparison included
- [ ] Screenshots folder completed
- [ ] LinkedIn post published
- [ ] Repository link submitted through the LMS

---

### Grading Rubric (100 Points)

| Criteria | Excellent | Good | Fair | Needs Improvement | Points |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Responsive Design & User Experience** | Fully responsive across devices, intuitive layout, excellent visual hierarchy | Minor responsiveness issues | Functional but inconsistent responsiveness | Poor responsiveness or usability | **25** |
| **Blade Components & Laravel Implementation** | Proper use of reusable Blade Components, layouts, and clean Laravel structure | Minor implementation issues | Partial component reuse | Little or no use of Blade Components | **20** |
| **UI Design & Tailwind CSS** | Professional design, consistent styling, effective use of Tailwind utilities | Minor styling inconsistencies | Basic styling with limited polish | Poor or incomplete interface | **20** |
| **GitHub Repository Management** | Public repository, organized project, at least 10 meaningful commits, clear commit messages | Minor repository or commit issues | Limited commit history or organization | Repository missing, private, or poorly maintained | **10** |
| **Technical Documentation (`README.md`)** | Complete, detailed, includes responsive design concepts, Blade Components, UI design analysis, screenshots, problems, solutions, and reflection | Mostly complete with minor omissions | Several required sections missing | Minimal or incomplete documentation | **15** |
| **LinkedIn Portfolio Post** | Professional post with before-and-after screenshots, GitHub link, and thoughtful reflection | One required element missing | Basic post with limited explanation | Missing or incomplete post | **5** |
| **Professionalism & Submission Compliance** | Submitted on time, follows all instructions, demonstrates professionalism | Minor formatting or submission issues | Several instruction deviations | Late or major requirements missing | **5** |
| **Total** | | | | | **100** |

---

### Portfolio Milestone
By completing this activity, students will add a professional responsive landing page to their software development portfolio. This project demonstrates competence in modern frontend development, responsive design, component-based architecture, and Laravel UI development. It serves as evidence that the student can create visually appealing, maintainable, and production-inspired interfaces—skills expected of junior Laravel and frontend developers.

Students should include this repository on their GitHub profile, showcase before-and-after improvements on LinkedIn, and feature the project in their personal portfolio website as an example of their growing expertise in client-server application development.
