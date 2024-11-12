document.addEventListener('DOMContentLoaded', function() {
    const submitButton = document.querySelector('.btn-submit');
    submitButton.addEventListener('mouseover', () => {
        submitButton.style.transform = 'scale(1.05)';
    });
    submitButton.addEventListener('mouseout', () => {
        submitButton.style.transform = 'scale(1)';
    });

    const tableRows = document.querySelectorAll('.table tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseover', () => {
            row.style.backgroundColor = '#f1c40f';
            row.style.color = '#2c3e50';
        });
        row.addEventListener('mouseout', () => {
            row.style.backgroundColor = '';
            row.style.color = '';
        });
    });
});
