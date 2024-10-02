document.getElementById('dataForm').addEventListener('submit', function(event) {
    const nama = document.getElementById('nama').value.trim();
    const alamat = document.getElementById('alamat').value.trim();
    const tanggalLahir = document.getElementById('tanggal_lahir').value;
    const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');
    const hobbies = document.querySelectorAll('input[name="hobby"]:checked');
    const pekerjaan = document.querySelectorAll('input[name="pekerjaan"]:checked');
    const konfirmasi = document.getElementById('konfirmasi').checked;

    let errors = [];

    if (nama === "") {
        errors.push("Nama harus diisi.");
    }

    if (alamat === "") {
        errors.push("Alamat harus diisi.");
    }

    if (tanggalLahir === "") {
        errors.push("Tanggal lahir harus diisi.");
    }

    if (!jenisKelamin) {
        errors.push("Jenis kelamin harus dipilih.");
    }

    if (hobbies.length === 0) {
        errors.push("Setidaknya satu hobi harus dipilih.");
    }

    if (pekerjaan.length === 0) {
        errors.push("Setidaknya satu pekerjaan harus dipilih.");
    }

    if (!konfirmasi) {
        errors.push("Anda harus menyetujui konfirmasi data.");
    }

    if (errors.length > 0) {
        event.preventDefault();
        alert("Terjadi kesalahan:\n" + errors.join("\n"));
    } else {
        console.log("Nama: " + nama);
        console.log("Alamat: " + alamat);
        console.log("Tanggal Lahir: " + tanggalLahir);
        console.log("Jenis Kelamin: " + (jenisKelamin ? jenisKelamin.value : ""));
        console.log("Hobby: " + Array.from(hobbies).map(hobby => hobby.value).join(", "));
        console.log("Pekerjaan: " + Array.from(pekerjaan).map(pekerjaan => pekerjaan.value).join(", "));
    }
});