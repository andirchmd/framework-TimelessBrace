import './bootstrap';

document.addEventListener("DOMContentLoaded", function() {
    fetch('/admin/dashboard')
        .then(response => response.json())
        .then(data => {
            // Misalnya Anda memiliki elemen dengan ID "totalCustomers" untuk menampilkan jumlah customer
            document.getElementById('totalCustomers').textContent = data.total_customers;
        })
        .catch(error => console.error('Error:', error));
});