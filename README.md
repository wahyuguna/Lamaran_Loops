Lamaran Kerja Programmer Loops.id atas nama I Made Wahyu Guna Negara

#Point 8 (Jelaskan secara singkat (2 - 3 paragraf) arsitektur, prinsip, pendekatan, atau hal
lainnya yang digunakan dalam pengembangan aplikasi ini.)
-> Aplikasi ini dibangun mengunakan freamwork Laravel versi 7. Saya membuat 2 tabel migration yaitu post dan comment. tabel post memiliki relasi dengan tabel user pada kolom id dan user_id. Pada Model user,posts dan comment saya menggunakan eloquent relationship agar tidak mengulang relasi yang terdapat pada tabel. Untuk data dummy saya menggunakan seed dan model factory sesuai dengan task. 
Untuk Controller saya menggunakan 2 Controller untuk task yaitu  CommentController dan PostController. Pada CommentController terdapat logic 4 method yang berfungsi. Method index pada CommentController berfungsi untuk menampilkan user-list beserta coment yang didapat dari post yang dibuat (#Task 2).  Method Guestcomments pada CommentController berfungsi menampikan user yang tidak login tapi melakukan comment pada post (#Task 3). Method stor pada CommentController berfungsi melakukan create comment. Method show pada CommentController berfungsi menampikan form untuk memberikan comment tiap post. Kemudian pada PostController terdapat 2 method active. Method index pada PostController berfungsi menmpilkan content (#Task 1). Method ViewPost pada PostController berfungsi menampilkan semua posts yang pernah dibuat oleh user.
Untuk tampilan saya mengunakan adminLTE.

#Point 9 (Apa kekurangan dari aplikasi yang dibangun ini dalam beberapa aspek berikut :)
a. Masih sangat banyak fitur yang masih kurang untuk aplikasi ini. Perlu banyak pengembangan dari CRUD untuk post data dan lain-lain. namun saya sudah mengerjakan sesui dengan Task yang diberikan.
b. Jika disesuikan dengan Task maka perlu banyak penyempurnaan untuk performa, namun saya sudah memperbaiki performa dari segi komputasi dengan eloquent relationship , sehingga tidak mengulang code yang sudah pernah dibuat.
C. Kulitas code yang saya bangun sudah biak jika semua metode dijalakna pada controller. Namun pada Task ini hanya menggunakan beberapa method dan menyisakan metode yang kosang sehingga membuat code terlihat kurang rapi.
