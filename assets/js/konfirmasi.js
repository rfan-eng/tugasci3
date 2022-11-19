function hapusMenu(url) {
        swal.fire({
                title: 'Are you sure?',
                text: "Yakin Dek?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmbuttonText: 'Ya, hapus!'
        }).then((result) => {
                if (result.value) {
                        document.location.href = url;
                }
        })
}

function hapusRole(url) {
        swal.fire({
                title: 'Are you sure?',
                text: "Yakin Dek?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmbuttonText: 'Ya, hapus!'
        }).then((result) => {
                if (result.value) {
                        document.location.href = url;
                }
        })
}

function hapusSubmenu(url) {
        swal.fire({
                title: 'Are you sure?',
                text: "Yakin Dek?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmbuttonText: 'Ya, hapus!'
        }).then((result) => {
                if (result.value) {
                        document.location.href = url;
                }
        })
}