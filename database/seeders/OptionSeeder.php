<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [

             // Web Application Development Questions [ID 1-5]
            
            // Options for question 1 (HTML)
            ['text' => 'HyperText Markup Language', 'correct' => true, 'question_id' => 1],
            ['text' => 'HyperText Machine Language', 'correct' => false, 'question_id' => 1],
            ['text' => 'HyperText Main Language', 'correct' => false, 'question_id' => 1],
            ['text' => 'HyperTech Markup Language', 'correct' => false, 'question_id' => 1],

            // Options for question 2 (CSS)
            ['text' => 'To structure content on a webpage', 'correct' => false, 'question_id' => 2],
            ['text' => 'To style and layout content on a webpage', 'correct' => true, 'question_id' => 2],
            ['text' => 'To make web pages interactive', 'correct' => false, 'question_id' => 2],
            ['text' => 'To connect the web server to the database', 'correct' => false, 'question_id' => 2],

            // Options for question 3 (JavaScript)
            ['text' => 'Handles the structure of web pages', 'correct' => false, 'question_id' => 3],
            ['text' => 'Handles the style of web pages', 'correct' => false, 'question_id' => 3],
            ['text' => 'Handles the interactivity and behavior of web pages', 'correct' => true, 'question_id' => 3],
            ['text' => 'Handles the storage of user data', 'correct' => false, 'question_id' => 3],

            // Options for question 4 (Web Server)
            ['text' => 'To host the website’s files and serve them to users', 'correct' => true, 'question_id' => 4],
            ['text' => 'To manage the web browser’s functionality', 'correct' => false, 'question_id' => 4],
            ['text' => 'To store data permanently on the web', 'correct' => false, 'question_id' => 4],
            ['text' => 'To handle the interaction between a website and the database', 'correct' => false, 'question_id' => 4],

            // Options for question 5 (Main Heading)
            ['text' => '<h1>', 'correct' => true, 'question_id' => 5],
            ['text' => '<head>', 'correct' => false, 'question_id' => 5],
            ['text' => '<title>', 'correct' => false, 'question_id' => 5],
            ['text' => '<header>', 'correct' => false, 'question_id' => 5],

            // Requirements Engineering and Software Design Questions  [ID 6-10]

            // Options for question 6 (SRS Purpose)
            ['text' => 'To specify the functional and non-functional requirements of a system', 'correct' => true, 'question_id' => 6],
            ['text' => 'To outline the testing plan for the system', 'correct' => false, 'question_id' => 6],
            ['text' => 'To describe the code structure of the system', 'correct' => false, 'question_id' => 6],
            ['text' => 'To explain the deployment strategy of the system', 'correct' => false, 'question_id' => 6],

            // Options for question 7 (Type of Requirements)
            ['text' => 'Functional requirements', 'correct' => false, 'question_id' => 7],
            ['text' => 'Non-functional requirements', 'correct' => false, 'question_id' => 7],
            ['text' => 'Performance requirements', 'correct' => false, 'question_id' => 7],
            ['text' => 'Behavioral requirements', 'correct' => true, 'question_id' => 7],

            // Options for question 8 (Functional vs Non-functional Requirements)
            ['text' => 'Functional requirements define system behavior; non-functional define system quality attributes', 'correct' => true, 'question_id' => 8],
            ['text' => 'Functional requirements define system architecture; non-functional define system implementation', 'correct' => false, 'question_id' => 8],
            ['text' => 'Functional requirements define UI; non-functional define backend functionality', 'correct' => false, 'question_id' => 8],
            ['text' => 'Functional requirements define testing; non-functional define debugging', 'correct' => false, 'question_id' => 8],

            // Options for question 9 (Modularity in Software Design)
            ['text' => 'Breaking down a system into smaller, manageable, and independent components', 'correct' => true, 'question_id' => 9],
            ['text' => 'Combining multiple systems into one single module', 'correct' => false, 'question_id' => 9],
            ['text' => 'Eliminating code duplication', 'correct' => false, 'question_id' => 9],
            ['text' => 'Implementing a multi-user access control', 'correct' => false, 'question_id' => 9],

            // Options for question 10 (Design Patterns)
            ['text' => 'Observer, Adapter, Proxy', 'correct' => false, 'question_id' => 10],
            ['text' => 'Singleton, Factory, Abstract Factory', 'correct' => true, 'question_id' => 10],
            ['text' => 'Decorator, Bridge, Interpreter', 'correct' => false, 'question_id' => 10],
            ['text' => 'Strategy, Composite, Mediator', 'correct' => false, 'question_id' => 10],

            // Software Project Management Questions  [ID 11-15]

            // Options for question 11 (Role of Project Manager)
            ['text' => 'To write the code for the project', 'correct' => false, 'question_id' => 11],
            ['text' => 'To oversee and manage the project’s scope, schedule, and resources', 'correct' => true, 'question_id' => 11],
            ['text' => 'To ensure that the project is only developed on time', 'correct' => false, 'question_id' => 11],
            ['text' => 'To test and debug the software', 'correct' => false, 'question_id' => 11],

            // Options for question 12 (Phases of Software Project Management Lifecycle)
            ['text' => 'Planning, Design, Development, Testing', 'correct' => false, 'question_id' => 12],
            ['text' => 'Initiation, Planning, Execution, Monitoring & Controlling, Closing', 'correct' => true, 'question_id' => 12],
            ['text' => 'Analysis, Design, Implementation, Testing', 'correct' => false, 'question_id' => 12],
            ['text' => 'Conception, Design, Prototyping, Deployment', 'correct' => false, 'question_id' => 12],

            // Options for question 13 (Risk Management Contribution)
            ['text' => 'It eliminates all risks in the project', 'correct' => false, 'question_id' => 13],
            ['text' => 'It helps to identify, assess, and mitigate potential issues that could negatively affect the project', 'correct' => true, 'question_id' => 13],
            ['text' => 'It ensures that the project is completed on time', 'correct' => false, 'question_id' => 13],
            ['text' => 'It defines the project goals', 'correct' => false, 'question_id' => 13],

            // Options for question 14 (Purpose of Gantt Chart)
            ['text' => 'To assign tasks to team members', 'correct' => false, 'question_id' => 14],
            ['text' => 'To visualize the project schedule and track progress', 'correct' => true, 'question_id' => 14],
            ['text' => 'To manage project risks', 'correct' => false, 'question_id' => 14],
            ['text' => 'To define the project requirements', 'correct' => false, 'question_id' => 14],

            // Options for question 15 (Agile vs Waterfall Methodologies)
            ['text' => 'Agile is iterative and flexible; Waterfall is linear and sequential', 'correct' => true, 'question_id' => 15],
            ['text' => 'Agile requires more documentation than Waterfall', 'correct' => false, 'question_id' => 15],
            ['text' => 'Waterfall emphasizes client collaboration, Agile does not', 'correct' => false, 'question_id' => 15],
            ['text' => 'Agile focuses on testing first, Waterfall focuses on development first', 'correct' => false, 'question_id' => 15],

             // Software Testing and Analysis Questions  [ID 16-20]

             // Options for question 16 (Primary Goal of Software Testing)
            ['text' => 'To create new software features', 'correct' => false, 'question_id' => 16],
            ['text' => 'To identify and fix defects in the software', 'correct' => true, 'question_id' => 16],
            ['text' => 'To design the architecture of the software', 'correct' => false, 'question_id' => 16],
            ['text' => 'To deploy the software into production', 'correct' => false, 'question_id' => 16],

            // Options for question 17 (Black-box vs White-box Testing)
            ['text' => 'Black-box testing focuses on the internal structure; white-box testing focuses on the user perspective', 'correct' => false, 'question_id' => 17],
            ['text' => 'Black-box testing tests the functionality without knowing internal code; white-box testing tests internal logic with knowledge of the code', 'correct' => true, 'question_id' => 17],
            ['text' => 'Black-box testing is done by developers; white-box testing is done by end-users', 'correct' => false, 'question_id' => 17],
            ['text' => 'Black-box testing is faster than white-box testing', 'correct' => false, 'question_id' => 17],

            // Options for question 18 (Testing Without Executing Code)
            ['text' => 'Dynamic testing', 'correct' => false, 'question_id' => 18],
            ['text' => 'Unit testing', 'correct' => false, 'question_id' => 18],
            ['text' => 'Static testing', 'correct' => true, 'question_id' => 18],
            ['text' => 'System testing', 'correct' => false, 'question_id' => 18],

            // Options for question 19 (Static Analysis Activities)
            ['text' => 'Code walkthroughs, code reviews, and analysis of code without execution', 'correct' => true, 'question_id' => 19],
            ['text' => 'Running automated tests, checking for bugs, and deployment', 'correct' => false, 'question_id' => 19],
            ['text' => 'Performing unit testing, integration testing, and user acceptance testing', 'correct' => false, 'question_id' => 19],
            ['text' => 'Testing code by simulating multiple user scenarios', 'correct' => false, 'question_id' => 19],

            // Options for question 20 (Regression Testing)
            ['text' => 'Testing done after every code change to ensure new features work as expected', 'correct' => false, 'question_id' => 20],
            ['text' => 'Testing done to verify that recent code changes have not adversely affected existing functionality', 'correct' => true, 'question_id' => 20],
            ['text' => 'Testing done only during the final phase of software development', 'correct' => false, 'question_id' => 20],
            ['text' => 'Testing done by external users before the software is released', 'correct' => false, 'question_id' => 20],

            // Software Development Workshop Questions  [ID 21-25]

            // Options for question 21 (Version Control)
            ['text' => 'Version control allows tracking changes in code and collaboration among developers, ensuring consistency', 'correct' => true, 'question_id' => 21],
            ['text' => 'Version control is a method for testing software before release', 'correct' => false, 'question_id' => 21],
            ['text' => 'Version control is used to automate the deployment process', 'correct' => false, 'question_id' => 21],
            ['text' => 'Version control helps generate reports on software performance', 'correct' => false, 'question_id' => 21],

            // Options for question 22 (Continuous Integration)
            ['text' => 'Continuous integration ensures that code is manually tested by each team member before merging', 'correct' => false, 'question_id' => 22],
            ['text' => 'Continuous integration is a practice where developers frequently integrate their code into a shared repository, with automated testing to catch errors early', 'correct' => true, 'question_id' => 22],
            ['text' => 'Continuous integration only happens at the end of the development cycle', 'correct' => false, 'question_id' => 22],
            ['text' => 'Continuous integration is a method for documenting changes in the software', 'correct' => false, 'question_id' => 22],

            // Options for question 23 (Code Reviews)
            ['text' => 'Code reviews are conducted to ensure the software runs smoothly on all platforms', 'correct' => false, 'question_id' => 23],
            ['text' => 'Code reviews allow team members to review each other’s code, improving quality, reducing bugs, and encouraging knowledge sharing', 'correct' => true, 'question_id' => 23],
            ['text' => 'Code reviews are only necessary during the final stages of development', 'correct' => false, 'question_id' => 23],
            ['text' => 'Code reviews help manage version control and track changes in the codebase', 'correct' => false, 'question_id' => 23],

            // Options for question 24 (Software Deployment)
            ['text' => 'Coding, testing, debugging, and maintaining the software', 'correct' => false, 'question_id' => 24],
            ['text' => 'Building, testing, deploying to production, and monitoring', 'correct' => true, 'question_id' => 24],
            ['text' => 'Designing, coding, and running automated tests', 'correct' => false, 'question_id' => 24],
            ['text' => 'Installing the software and ensuring it works correctly on all devices', 'correct' => false, 'question_id' => 24],

            // Options for question 25 (Agile Methodologies)
            ['text' => 'Agile methodologies promote a linear and sequential approach to development', 'correct' => false, 'question_id' => 25],
            ['text' => 'Agile methodologies focus on iterative development, frequent releases, and continuous feedback', 'correct' => true, 'question_id' => 25],
            ['text' => 'Agile methodologies require strict planning and detailed documentation before starting development', 'correct' => false, 'question_id' => 25],
            ['text' => 'Agile methodologies are only suitable for large teams and complex projects', 'correct' => false, 'question_id' => 25],

            // Compiler Development Questions  [ID 26-30]

            // Options for question 31 (Dynamic vs Static Typing)
            ['text' => 'Dynamic typing checks data types at compile time, while static typing checks data types at runtime', 'correct' => false, 'question_id' => 31],
            ['text' => 'Dynamic typing checks data types at runtime, while static typing checks data types at compile time', 'correct' => true, 'question_id' => 31],
            ['text' => 'Dynamic typing does not require type declaration, while static typing requires explicit type declaration', 'correct' => true, 'question_id' => 31],
            ['text' => 'Static typing is only used in scripting languages', 'correct' => false, 'question_id' => 31],

            // Options for question 32 (Object-Oriented Programming Principles)
            ['text' => 'The four main principles of object-oriented programming are inheritance, encapsulation, polymorphism, and abstraction', 'correct' => true, 'question_id' => 32],
            ['text' => 'Object-oriented programming is based on functions and logic', 'correct' => false, 'question_id' => 32],
            ['text' => 'Inheritance and encapsulation are optional principles in object-oriented programming', 'correct' => false, 'question_id' => 32],
            ['text' => 'Object-oriented programming does not support the concept of classes and objects', 'correct' => false, 'question_id' => 32],

            // Options for question 33 (Advantages of Recursion)
            ['text' => 'Recursion allows a function to call itself, which can simplify complex problems into smaller ones', 'correct' => true, 'question_id' => 33],
            ['text' => 'Recursion is always more efficient than iterative solutions', 'correct' => false, 'question_id' => 33],
            ['text' => 'Recursion reduces the need for memory in problem-solving', 'correct' => false, 'question_id' => 33],
            ['text' => 'Recursion avoids stack overflow in large computations', 'correct' => false, 'question_id' => 33],

            // Options for question 34 (Stack vs Queue)
            ['text' => 'A stack follows a Last In, First Out (LIFO) structure, while a queue follows a First In, First Out (FIFO) structure', 'correct' => true, 'question_id' => 34],
            ['text' => 'A stack follows a First In, First Out (FIFO) structure, while a queue follows a Last In, First Out (LIFO) structure', 'correct' => false, 'question_id' => 34],
            ['text' => 'A stack allows elements to be inserted and removed from both ends, while a queue only allows insertion at one end and removal from the other end', 'correct' => false, 'question_id' => 34],
            ['text' => 'A queue stores elements in reverse order, while a stack stores them sequentially', 'correct' => false, 'question_id' => 34],

            // Options for question 35 (Memory Management in Garbage Collection)
            ['text' => 'Garbage collection automatically reclaims memory that is no longer in use by freeing up memory allocated to unused objects', 'correct' => true, 'question_id' => 35],
            ['text' => 'Garbage collection requires the programmer to manually free unused memory', 'correct' => false, 'question_id' => 35],
            ['text' => 'Languages with garbage collection do not need any memory management techniques', 'correct' => false, 'question_id' => 35],
            ['text' => 'Garbage collection happens only during the compilation of the program', 'correct' => false, 'question_id' => 35],

            // Data Mining Questions  [ID 36-40]

            // Options for question 36 (Data Mining vs Traditional Data Analysis)
            ['text' => 'Data mining involves extracting patterns from large datasets, while traditional data analysis focuses on summarizing data using descriptive statistics', 'correct' => true, 'question_id' => 36],
            ['text' => 'Data mining and traditional data analysis both focus on simple summaries of data', 'correct' => false, 'question_id' => 36],
            ['text' => 'Traditional data analysis is used for finding hidden patterns in large datasets, while data mining is used for cleaning data', 'correct' => false, 'question_id' => 36],
            ['text' => 'Data mining and traditional data analysis are the same techniques applied to different datasets', 'correct' => false, 'question_id' => 36],

            // Options for question 37 (Association Rule Mining)
            ['text' => 'Association rule mining is a method for finding hidden correlations between variables in large datasets', 'correct' => true, 'question_id' => 37],
            ['text' => 'Association rule mining is used to classify data into different categories', 'correct' => false, 'question_id' => 37],
            ['text' => 'Association rule mining is the process of clustering data into similar groups', 'correct' => false, 'question_id' => 37],
            ['text' => 'Association rule mining is focused on improving the accuracy of prediction models', 'correct' => false, 'question_id' => 37],

            // Options for question 38 (Steps in Data Mining Process)
            ['text' => 'The key steps are data collection, data cleaning, model training, and model deployment', 'correct' => false, 'question_id' => 38],
            ['text' => 'The key steps are data preprocessing, data transformation, pattern evaluation, and knowledge representation', 'correct' => true, 'question_id' => 38],
            ['text' => 'The key steps are data visualization, statistical modeling, and reporting', 'correct' => false, 'question_id' => 38],
            ['text' => 'The key steps are feature extraction, outlier detection, and data summarization', 'correct' => false, 'question_id' => 38],

            // Options for question 39 (Clustering vs Classification)
            ['text' => 'Clustering groups data into predefined categories, while classification predicts future data points', 'correct' => false, 'question_id' => 39],
            ['text' => 'Clustering is an unsupervised learning technique that groups data based on similarities, while classification is a supervised learning method that assigns labels to data based on prior knowledge', 'correct' => true, 'question_id' => 39],
            ['text' => 'Clustering and classification are both supervised learning techniques used for predictive modeling', 'correct' => false, 'question_id' => 39],
            ['text' => 'Clustering is used to assign new labels to data, while classification groups existing data based on patterns', 'correct' => false, 'question_id' => 39],

            // Options for question 40 (Purpose of Data Preprocessing)
            ['text' => 'Data preprocessing is used to transform raw data into a clean and structured format, improving the quality of the data for analysis', 'correct' => true, 'question_id' => 40],
            ['text' => 'Data preprocessing is used to visualize the data before model training', 'correct' => false, 'question_id' => 40],
            ['text' => 'Data preprocessing removes the need for data mining by cleaning the data', 'correct' => false, 'question_id' => 40],
            ['text' => 'Data preprocessing is used to reduce the dimensionality of datasets to improve processing time', 'correct' => false, 'question_id' => 40],

            // ============================== PUBLIC QUESTIONS =============================

            // Web Application Development Questions [ID 41-45]

            // Options for question 41 (CSS Output)
            ['text' => 'The text color of all <h1> elements will change to red.', 'correct' => true, 'question_id' => 41],
            ['text' => 'The <h1> elements will have no color.', 'correct' => false, 'question_id' => 41],
            ['text' => 'The text color of all <h1> elements will change to blue.', 'correct' => false, 'question_id' => 41],
            ['text' => 'The code will result in an error.', 'correct' => false, 'question_id' => 41],

            // Options for question 42 (JavaScript Output)
            ['text' => '"string"', 'correct' => true, 'question_id' => 42],
            ['text' => '"Hello, World!"', 'correct' => false, 'question_id' => 42],
            ['text' => 'undefined', 'correct' => false, 'question_id' => 42],
            ['text' => 'object', 'correct' => false, 'question_id' => 42],

            // Options for question 43 (PHP Result)
            ['text' => '10', 'correct' => true, 'question_id' => 43],
            ['text' => '11', 'correct' => false, 'question_id' => 43],
            ['text' => 'Error', 'correct' => false, 'question_id' => 43],
            ['text' => 'Nothing will be displayed.', 'correct' => false, 'question_id' => 43],

            // Options for question 44 (jQuery Code Functionality)
            ['text' => 'It sets a click event listener on the button with ID "myButton" that triggers an alert saying "Button clicked!".', 'correct' => true, 'question_id' => 44],
            ['text' => 'It changes the text of the button with ID "myButton".', 'correct' => false, 'question_id' => 44],
            ['text' => 'It submits a form when the button with ID "myButton" is clicked.', 'correct' => false, 'question_id' => 44],
            ['text' => 'It hides the button with ID "myButton".', 'correct' => false, 'question_id' => 44],

            // Options for question 45 (Express.js Route Return)
            ['text' => '{ message: "Hello, World!" }', 'correct' => true, 'question_id' => 45],
            ['text' => 'A string "Hello, World!"', 'correct' => false, 'question_id' => 45],
            ['text' => 'Error message', 'correct' => false, 'question_id' => 45],
            ['text' => 'Nothing will be returned.', 'correct' => false, 'question_id' => 45],


        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
