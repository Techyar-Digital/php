    document.getElementById('menu-toggle').addEventListener('click', function() {
            const navUl = document.getElementById('nav-ul');
            if (navUl.style.display === 'flex') {
                navUl.style.display = 'none';
            } else {
                navUl.style.display = 'flex';
                navUl.style.flexDirection = 'column';
            }
        });
    
        document.querySelectorAll('.dropdown > a').forEach(function(dropdownToggle) {
            dropdownToggle.addEventListener('click', function(event) {
                event.preventDefault();
                const dropdown = this.parentElement;
                dropdown.classList.toggle('active');
            });
        });
    
        // Handle resizing the window
        window.addEventListener('resize', function() {
            const navUl = document.getElementById('nav-ul');
            if (window.innerWidth > 768) {
                navUl.style.display = 'flex';
                navUl.style.flexDirection = 'row';
            } else {
                navUl.style.display = 'none';
            }
        });
    