# Site Update Summary

## General Changes
- **Branch:** Created a new Git branch `update-content-gemini-md` to isolate all updates.
- **AI Context (`GEMINI.md`):** Generated a `GEMINI.md` file capturing core technical stack, engineering standards, and mandates (e.g., preserving vanilla web technologies and a new prohibition on inline styles).

## Page-by-Page Updates

### Home Page (`index.html`)
- **Introduction:** Updated employment details to reflect your current role as a Senior Linux Engineer at Chicago Trading Company.
- **Hobbies & Interests:** Replaced outdated hobbies and extracurriculars with your current interests: Chicago suburbs living, Linux homelab, IoT, home automation, racing sailboats on Lake Michigan, and running.
- **Cleanups:** Removed middle initial from your name and all references to hosting an Arch Linux mirror, email addresses, and PGP keys.

### Resume Page (`resume/index.html`)
- **Content Merge:** Merged your provided LaTeX resume details into the original HTML structure, preserving all past experience while adding your current roles.
- **Professional Summary:** Added a new professional summary section.
- **Experience:** Added your roles at Chicago Trading Company (Senior Linux Engineer) and Goldman Sachs (Vice President), and updated end dates for previous roles.
- **Certifications:** Added your FCC Amateur Radio Operator license and EPA Section 608 Universal Certification.
- **Skills:** Completely rewrote the "Computer Skills" section to highlight current expertise in Linux, DevOps, networking, and programming.
- **Cleanups:** Removed email address and middle initial.

### Projects Page (`projects/index.html`)
- **ReverseOsmosis:** Added your new Android/BLE project at the top of the list, highlighting its connection to your interests in reverse engineering and IoT.
- **Open-Source Contributions:** Replaced legacy projects with a summary of your recent contributions to:
  - Home Assistant
  - LibreNMS
  - pfSense
  - Network UPS Tools
- **Styling:** Added a CSS-based `.left-justify` class for project headings and removed all legacy project images.

### Sites and Systems Page (`sas/index.html`)
- **Home Server:** Updated the description to list current workloads (IoT, home automation, local software development, backup/file storage, and hosting this site).
- **Cleanups:** Removed outdated entries for the IIT Server and the Arch Linux mirror. Converted the Home Server link to plain text and removed the uptime remark.

## Repository Cleanup
- Deleted unreferenced `server/` directory and `projects/img/` directory.
- Deleted legacy files: `assets/nkaminski_pubkey.asc` and `netgear_armor_postmortem.txt`.
- Verified all remaining assets are actively referenced by the site.

*All modifications strictly adhered to the existing visual aesthetics and mandates defined in GEMINI.md.*