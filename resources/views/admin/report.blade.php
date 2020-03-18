<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <div style="display: none">
    </div>
    </head>
    <body>
    <input type="button" id="btnPrint" onclick="window.print();" value="พิมพ์หน้านี้" />
    <?php
    echo "วันที่" . date("d/m/Y") . "<br>";
    
    ?>
    <br>
   {{ Auth::user()->f_name }} {{ Auth::user()->l_name }} 
    <center><h2>รายงานข้อมูลผู้ใช้งาน</h2></center>
        
    <centwe><table>
            <tr>
                    <th>#</th>
                    <th>รหัสมาชิก</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody class="text-center">
            @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->stud_id }}</td>
                        <td>{{ $user->f_name }}</td>
                        <td>{{ $user->l_name }}</td>
                        <td>{{ $user->statuses->status_name }}</td>
            @endforeach
        </table></centwe>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        </html>
       
    
        
        
        
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ storage_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
        body {
            font-family: "THSarabunNew";
        }
        table{
            border-collapse: collapse;
        }
        td,th{
            border:1px solid;
        }
        </style>
        <style type="text/css">
    @media print {
    input#btnPrint {
    display: none;
    }
    }
    </style>
   
    </body>