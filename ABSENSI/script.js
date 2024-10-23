$(document).ready(function() {
    $('#attendanceForm').submit(function(event) {
        event.preventDefault(); // Mencegah refresh halaman

        let studentName = $('#studentName').val();
        let studentID = $('#studentID').val();
        let attendanceStatus = $('#attendanceStatus').val();

        // Menambahkan data ke tabel absensi
        let newRow = `
            <tr>
                <td>${studentName}</td>
                <td>${studentID}</td>
                <td>${attendanceStatus}</td>
            </tr>
        `;
        $('#attendanceData').append(newRow);

        // Reset form setelah submit
        $('#attendanceForm')[0].reset();
    });
});
