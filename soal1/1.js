const myBiodata = () => {
    return {
        'name' : 'Muhammad Nurhasan Mahmudi',
        'age'  : 19,
        'address' : 'Bogor',
        'hobbies' : ['Reading', 'Programming', 'Traveling', 'game', 'computering'],
        'is_married' : false, 
        'list_school' : [
            {
                name : 'Sekolah Tinggi Teknologi Muhammadiyah Cileungsi',
                year_in : 2018, 
                year_out : 2022, 
                major : 'Teknik Informatika'
            },

            {
                name : 'SMK Generasi Mandiri Gunung Putri',
                year_in : 2015, 
                year_out : 2018, 
                major : 'Teknik Komputer Jaringan'
            },

            {
                name : 'SMP Bina Bangsa Mandiri 1',
                year_in : 2012, 
                year_out : 2015, 
                major : null
            }
        ],
        'skills' : [
            {
                skill_name : 'C++',
                level : 'advanced'
            },

            {
                skill_name : 'Speak English',
                level : 'advanced'
            },

            {
                skill_name : 'HTML + CSS',
                level : 'advanced'
            },

            {
                skill_name : 'Design CorelDRAW & Adobe XD',
                level : 'advanced'
            },

            {
                skill_name : 'Database MySQL',
                level : 'Beginner'
            },

            {
                skill_name : 'Microsoft Office Aplication',
                level : 'advanced'
            },
        ],
        'interest_in_coding' : true
    }
};

console.log(myBiodata());