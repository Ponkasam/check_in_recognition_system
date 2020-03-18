
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <style>
                    @font-face{
                     font-family:  'THSarabunNew';
                     font-style: normal;
                     font-weight: normal;
                     src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
                    }
                    @font-face{
                     font-family:  'THSarabunNew';
                     font-style: normal;
                     font-weight: bold;
                     src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
                    }
                    @font-face{
                     font-family:  'THSarabunNew';
                     font-style: italic;
                     font-weight: normal;
                     src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
                    }
                    @font-face{
                     font-family:  'THSarabunNew';
                     font-style: italic;
                     font-weight: bold;
                     src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
                    }
                    body{
                     font-family: "THSarabunNew";
                     font-size: 16px;
                    }
                    @page {
                          size: A4;
                          padding: 15px;
                        }
                        @media print {
                          html, body {
                            width: 210mm;
                            height: 297mm;
                            /*font-size : 16px;*/
                          }
                        }
                    </style>
        </head>
        <body>
    
                <table>
                        <tr>
                                <th>#</th>
                                <th>รหัสมาชิก</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>วัน/เดือน/ปี</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->stud_id }}</td>
                                    <td>{{ $user->f_name }}</td>
                                    <td>{{ $user->l_name }}</td>
                                    <td>{{ $user->birth_day }}</td>
                        @endforeach
                    </table>
        </body>
        </html>
       
    
        
        
        
    