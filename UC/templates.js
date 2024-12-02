// templates.js
const medicalTemplate = `
    [Your Name]
    [Your Registration Number]
    [Date]

    Head of the Department,
    Faculty of Applied Science,
    University of Vavuniya.

    Subject: Submission of Medical Certificate

    Dear Sir/Madam,

    I, [Your Name], holding the registration number [Your Registration Number], am submitting my medical certificate for your review. I was unable to attend lectures from [Start Date] to [End Date] due to [Reason for Absence, e.g., illness].

    I kindly request your acceptance of this medical certificate to account for my absence during the mentioned period. I apologize for any inconvenience caused and appreciate your understanding.

    Thank you for your consideration.

    Yours Sincerely,

   [Your Signature]

`;

const attendanceTemplate = `
    [Your Name]
    [Your Registration Number]
    [Date]

    The Lecturer,
    [Course Name],
    [University Name]

    Subject: Request for Excuse from Class Attendance

    Dear [Lecturer’s Name],

    I am writing to request an excuse for my absence from class on [Date(s) of Absence]. Unfortunately, I was unable to attend due to [reason for absence, e.g., illness, family emergency, or personal reasons].

    I have made efforts to catch up on the missed material, and I am willing to complete any additional assignments or tasks that may be required. I apologize for any inconvenience my absence may have caused and kindly request your understanding and approval for this excuse.

    Thank you for your consideration.

    Yours Sincerely,

    [Your Name]
    [Your Contact Information]
`;

const accommodationTemplate = `
    [Your Name]
    [Your Registration Number]
    [Date]

    The Registrar,
    University of Vavuniya.

    Subject: Request for Hostel Accommodation

    Dear Sir/Madam,

    I am writing to formally request hostel accommodation for the upcoming academic term. I am currently enrolled as a [Your Year, e.g., First Year] student in the [Your Program, e.g., Faculty of Science] at [University Name]. Due to [reason for accommodation request, e.g., distance from home, lack of transport facilities], it would be highly beneficial for me to reside on campus.

    I kindly request that you consider my application for hostel accommodation. I am willing to comply with all the rules and regulations of the hostel and university.

    Thank you for considering my request. I am hopeful for a favorable response.

    Yours Sincerely,

    [Your Name]
    [Your Contact Information]
`;

        // Function to load the template content into textarea
        function loadTemplate(templateContent) {
            document.getElementById('letterContent').value = templateContent;
        }

        // Function to download the edited letter as a .txt file
        function downloadLetter() {
            const content = document.getElementById('letterContent').value;
            const blob = new Blob([content], { type: 'text/plain' });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'Letter.txt';
            link.click();
        }   
    