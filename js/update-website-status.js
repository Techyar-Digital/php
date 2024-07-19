
        document.addEventListener('DOMContentLoaded', function() {
            const toggleIcon = document.querySelector('.toggle-icon-box i');
            const websiteStatus = document.querySelector('.website-status');

            // Function to set the toggle and status text
            function setStatus(status, text) {
                websiteStatus.textContent = text;
                if (status === 'active') {
                    toggleIcon.className = 'fi fi-rr-toggle-on toggle-status-act';
                } else {
                    toggleIcon.className = 'fi fi-rr-toggle-off toggle-status-hold';
                }
            }

            // Fetch the current status from the server
            const xhrGet = new XMLHttpRequest();
            xhrGet.open('GET', 'update_status.php', true);
            xhrGet.onreadystatechange = function() {
                if (xhrGet.readyState === XMLHttpRequest.DONE && xhrGet.status === 200) {
                    const response = JSON.parse(xhrGet.responseText);
                    setStatus(response.status, response.website_status_text);
                }
            };
            xhrGet.send();

            toggleIcon.addEventListener('click', function() {
                // Determine the new status and text
                let newStatus, newText;
                if (toggleIcon.classList.contains('toggle-status-act')) {
                    newStatus = 'inactive';
                    newText = 'Website is now inactive!';
                } else {
                    newStatus = 'active';
                    newText = 'Website is now active!';
                }

                // Update the status text on the page
                setStatus(newStatus, newText);

                // Send the status data to the PHP file
                const xhrPost = new XMLHttpRequest();
                xhrPost.open('POST', 'update_status.php', true);
                xhrPost.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhrPost.onreadystatechange = function() {
                    if (xhrPost.readyState === XMLHttpRequest.DONE && xhrPost.status === 200) {
                        console.log(xhrPost.responseText);
                    }
                };
                xhrPost.send('status=' + newStatus + '&website_status_text=' + newText);
            });
        });