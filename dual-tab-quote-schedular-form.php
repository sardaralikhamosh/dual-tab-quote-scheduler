<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Quote & Call Scheduling Forms</title>
    <style>
        /* Reset and base styles with more unique prefixed classes */
        .tmcustom-quote-form * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .tmcustom-quote-form {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Tab navigation styling */
        .tmcustom-quote-tabs {
            display: flex;
            width: 100%;
            margin-bottom: 30px;
        }
        
        .tmcustom-quote-tab {
            flex: 1;
            padding: 15px 0;
            text-align: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .tmcustom-quote-tab.tmcustom-active-tab {
            opacity: 1;
        }
        
        .tmcustom-quote-tab.tmcustom-inactive-tab {
            opacity: 0.85;
        }
        
        .tmcustom-quote-tab:first-child {
            background-color: #b80000;
            border-top-left-radius: 8px;
        }
        
        .tmcustom-quote-tab:last-child {
            background: #002470 !important;
            border-top-right-radius: 8px;
        }
        
        /* Form layout */
        .tmcustom-quote-columns {
            display: flex;
            gap: 30px;
            margin-bottom: 20px;
        }
        
        .tmcustom-quote-column {
            flex: 1;
        }
        
        /* Section styles */
        .tmcustom-quote-section {
            margin-bottom: 30px;
        }
        
        .tmcustom-quote-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        /* Form elements */
        .tmcustom-quote-form-group {
            margin-bottom: 20px;
        }
        
        .tmcustom-quote-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .tmcustom-quote-input,
        .tmcustom-quote-textarea,
        .tmcustom-quote-select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            line-height: normal !important;
            background-color: #fff;
            appearance: none;
            -webkit-appearance: none;
        }
        
        .tmcustom-quote-input:focus,
        .tmcustom-quote-textarea:focus,
        .tmcustom-quote-select:focus {
            outline: none !important;
            border-color: #435789 !important;
            box-shadow: none !important;
        }
        
        .tmcustom-quote-textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        /* Submit button */
        .tmcustom-quote-submit {
            width: 100%;
            padding: 15px;
            background-color: #00205b;
            color: #fff !important;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .tmcustom-quote-submit:hover {
            background-color: #00184a;
        }
        
        /* Form tabs container - fixed height solution */
        .tmcustom-forms-container {
            position: relative;
            min-height: 700px; /* Set a fixed minimum height that works for both forms */
        }
        
        /* Form tabs */
        .tmcustom-form-content {
            display: none;
            position: absolute;
            width: 100%;
            top: 0;
        }
        
        .tmcustom-form-content.tmcustom-active {
            display: block;
        }
        
        /* Date and time inputs */
        .tmcustom-quote-date-time {
            display: flex;
            gap: 15px;
        }
        
        .tmcustom-quote-date-time > div {
            flex: 1;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .tmcustom-quote-columns {
                flex-direction: column;
                gap: 0;
            }
            
            .tmcustom-quote-column {
                margin-bottom: 20px;
            }
            
            .tmcustom-quote-date-time {
                flex-direction: column;
                gap: 0;
            }
            
            .tmcustom-forms-container {
                min-height: 1200px; /* Increase height for mobile view */
            }
        }
    </style>
</head>
<body>
    <div class="tmcustom-quote-form">
        <!-- Tab Navigation -->
        <div class="tmcustom-quote-tabs">
            <div class="tmcustom-quote-tab tmcustom-active-tab" id="tmcustomQuoteTab">Custom Quote</div>
            <div class="tmcustom-quote-tab tmcustom-inactive-tab" id="tmcustomScheduleCallTab">Schedule a call</div>
        </div>
        
        <!-- Forms Container with Fixed Height -->
        <div class="tmcustom-forms-container">
            <!-- Form A: Custom Quote Form -->
            <form id="tmcustomQuoteForm" class="tmcustom-form-content tmcustom-active">
                <div class="tmcustom-quote-columns">
                    <!-- Left Column -->
                    <div class="tmcustom-quote-column">
                        <!-- Contact Details Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Contact Detail</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomFullName">Full Name</label>
                                <input type="text" id="tmcustomFullName" name="fullName" class="tmcustom-quote-input" placeholder="Enter Your Name" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomPhone">Phone Number</label>
                                <input type="tel" id="tmcustomPhone" name="phoneNumber" class="tmcustom-quote-input" placeholder="Phone Number" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomEmail">Email Address</label>
                                <input type="email" id="tmcustomEmail" name="emailAddress" class="tmcustom-quote-input" placeholder="Email Address" required>
                            </div>
                        </div>
                        
                        <!-- Printing Description Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Printing Description</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomSpecification">Your detailed Specification here</label>
                                <textarea id="tmcustomSpecification" name="specification" class="tmcustom-quote-textarea" placeholder="Box Size/ Quantity/ Printing / Purposes" required></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="tmcustom-quote-column">
                        <!-- Measurements Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Measurements</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomBoxSize">Box size (LxWxH)</label>
                                <input type="text" id="tmcustomBoxSize" name="boxSize" class="tmcustom-quote-input" placeholder="1 2 3" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomScale">Scale</label>
                                <input type="text" id="tmcustomScale" name="scale" class="tmcustom-quote-input" placeholder="Inch" required>
                            </div>
                        </div>
                        
                        <!-- Printing Detail Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Printing Detail</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomPrintingType">Printing</label>
                                <input type="text" id="tmcustomPrintingType" name="printingType" class="tmcustom-quote-input" placeholder="Outside Printing Only" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustomMaterial">Select Material</label>
                                <input type="text" id="tmcustomMaterial" name="material" class="tmcustom-quote-input" placeholder="White Card Stock" required>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="tmcustom-quote-submit">Send Request</button>
                <input type="hidden" name="formType" value="customQuote">
            </form>
            
            <!-- Form B: Schedule a Call Form -->
            <form id="tmcustomCallForm" class="tmcustom-form-content">
                <div class="tmcustom-quote-columns">
                    <!-- Left Column -->
                    <div class="tmcustom-quote-column">
                        <!-- Contact Details Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Contact Detail</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2FullName">Full Name</label>
                                <input type="text" id="tmcustom2FullName" name="fullName" class="tmcustom-quote-input" placeholder="Enter Your Name" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2Phone">Phone Number</label>
                                <input type="tel" id="tmcustom2Phone" name="phoneNumber" class="tmcustom-quote-input" placeholder="Phone Number" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2Email">Email Address</label>
                                <input type="email" id="tmcustom2Email" name="emailAddress" class="tmcustom-quote-input" placeholder="Email Address" required>
                            </div>
                        </div>
                        
                        <!-- Call Details Section -->
                        <div class="tmcustom-quote-section">
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2CallDate">Date of Call</label>
                                <input type="date" id="tmcustom2CallDate" name="callDate" class="tmcustom-quote-input" required>
                            </div>
                            
                            <div class="tmcustom-quote-date-time">
                                <div class="tmcustom-quote-form-group">
                                    <label class="tmcustom-quote-label" for="tmcustom2CallTime">Time of Call</label>
                                    <input type="time" id="tmcustom2CallTime" name="callTime" class="tmcustom-quote-input" required>
                                </div>
                                
                                <div class="tmcustom-quote-form-group">
                                    <label class="tmcustom-quote-label" for="tmcustom2CallDuration">Duration of Call</label>
                                    <select id="tmcustom2CallDuration" name="callDuration" class="tmcustom-quote-select" required>
                                        <option value="">Select Duration</option>
                                        <option value="15">15 minutes</option>
                                        <option value="30">30 minutes</option>
                                        <option value="45">45 minutes</option>
                                        <option value="60">60 minutes</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2CallType">Call Type</label>
                                <select id="tmcustom2CallType" name="callType" class="tmcustom-quote-select" required>
                                    <option value="">Select Call Type</option>
                                    <option value="fresh">Fresh Call</option>
                                    <option value="followup">Follow Up Call</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="tmcustom-quote-column">
                        <!-- Description Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Description</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2CallDescription">Your detailed requirements</label>
                                <textarea id="tmcustom2CallDescription" name="description" class="tmcustom-quote-textarea" placeholder="Please describe what you'd like to discuss on the call" required></textarea>
                            </div>
                        </div>
                        
                        <!-- Printing Detail Section -->
                        <div class="tmcustom-quote-section">
                            <h2 class="tmcustom-quote-heading">Printing Detail</h2>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2PrintingType">Printing</label>
                                <input type="text" id="tmcustom2PrintingType" name="printingType" class="tmcustom-quote-input" placeholder="Outside Printing Only" required>
                            </div>
                            
                            <div class="tmcustom-quote-form-group">
                                <label class="tmcustom-quote-label" for="tmcustom2Material">Select Material</label>
                                <input type="text" id="tmcustom2Material" name="material" class="tmcustom-quote-input" placeholder="White Card Stock" required>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="tmcustom-quote-submit">Schedule Call</button>
                <input type="hidden" name="formType" value="scheduleCall">
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab elements
            const customQuoteTab = document.getElementById('tmcustomQuoteTab');
            const scheduleCallTab = document.getElementById('tmcustomScheduleCallTab');
            
            // Form elements
            const quoteForm = document.getElementById('tmcustomQuoteForm');
            const callForm = document.getElementById('tmcustomCallForm');
            
            // Tab switching functionality
            customQuoteTab.addEventListener('click', function() {
                // Update tab styles
                customQuoteTab.classList.add('tmcustom-active-tab');
                customQuoteTab.classList.remove('tmcustom-inactive-tab');
                scheduleCallTab.classList.add('tmcustom-inactive-tab');
                scheduleCallTab.classList.remove('tmcustom-active-tab');
                
                // Show/hide forms
                quoteForm.classList.add('tmcustom-active');
                callForm.classList.remove('tmcustom-active');
            });
            
            scheduleCallTab.addEventListener('click', function() {
                // Update tab styles
                scheduleCallTab.classList.add('tmcustom-active-tab');
                scheduleCallTab.classList.remove('tmcustom-inactive-tab');
                customQuoteTab.classList.add('tmcustom-inactive-tab');
                customQuoteTab.classList.remove('tmcustom-active-tab');
                
                // Show/hide forms
                callForm.classList.add('tmcustom-active');
                quoteForm.classList.remove('tmcustom-active');
            });
            
            // Form submission handling for Quote Form
            quoteForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate form
                const formData = new FormData(quoteForm);
                let isValid = true;
                
                // Basic validation
                for (const [name, value] of formData.entries()) {
                    if (!value.trim() && name !== 'formType') {
                        isValid = false;
                        break;
                    }
                }
                
                if (isValid) {
                    // For WordPress integration via email
                    sendToWordPress(formData, 'Custom Quote Request');
                } else {
                    alert('Please fill in all required fields.');
                }
            });
            
            // Form submission handling for Call Form
            callForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate form
                const formData = new FormData(callForm);
                let isValid = true;
                
                // Basic validation
                for (const [name, value] of formData.entries()) {
                    if (!value.trim() && name !== 'formType') {
                        isValid = false;
                        break;
                    }
                }
                
                if (isValid) {
                    // For WordPress integration via email
                    sendToWordPress(formData, 'Schedule a Call Request');
                } else {
                    alert('Please fill in all required fields.');
                }
            });
            
            // Function to send data to WordPress
            function sendToWordPress(formData, formTitle) {
                // Convert FormData to an object for sending
                const formObject = {};
                formData.forEach((value, key) => {
                    formObject[key] = value;
                });
                
                // For Elementor HTML widget integration with WordPress
                // This is where you would typically use WordPress's admin-ajax.php
                
                // AJAX request to WordPress
                const data = {
                    action: 'tmcustom_submit_form', // This would be handled in your WordPress functions.php
                    form_data: formObject,
                    form_title: formTitle
                };
                
                // Simulated success for demonstration
                // In actual implementation, you'd use fetch with WordPress ajax URL
                
                // Uncomment this for production and add your WordPress ajax URL
                /*
                fetch(ajaxurl, {
                    method: 'POST',
                    body: new URLSearchParams(data),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Your submission was successful! We will contact you shortly.');
                        formData.target.reset();
                    } else {
                        alert('There was an error submitting your form. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error submitting your form. Please try again.');
                });
                */
                
                // For demonstration purposes only
                alert('Your ' + formTitle + ' has been submitted! In a real implementation, this would be sent to your WordPress admin email.');
                
                // Reset form
                formData.target.reset();
            }
        });
    </script>
</body>
</html>