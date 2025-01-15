<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title> Feedback From</title>
    </head>
    <>
        <h1>Feedback From</h1>
        <form id="name">Name:</label><br>
        <input type="text"id="name" name="name"Required><br><br>

        <label for="mobile">Mobile Number:</label><br>
        <input type=""tel" id="mobile"name="mobile" pattern="[0-9]{10}"required><br><br>

        <label for="email">Email:</label><br>
        <input type="email"id="email" name="email"required><br><br>

        <label for="message">Message"</label><br>
        <textarea id="message"name="message"rows="4"reqired></textarea><br><br>

        <button type="button"onclick="submitForm()">Submit</button>
        </form>
        <script>
            function submitForm(){
                const name=document.getElememtByld('name').value;
                const mobile=document.getElementByld('mobile').value;
                const email=document.getElementByld('email').value;
                const message=document.getElementByld('message').value;

                const feedbackData={
                    name:name,
                    mobile:mobile,
                    email:email,
                    message:message,
                };
                localStorage.setltem('feedbackData',JSON.stringify(feedbackData));
                window.location.href='submitted_feedback.html';
            }
            </script>

            
                        
        
    </body>
</html>