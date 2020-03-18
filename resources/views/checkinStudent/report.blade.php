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
        <center><h2>รายงานข้อมูลการเข้าเรียน</h2></center>
        
        <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>รหัสนักศึกษา</th>
                        <th>รหัสวิชา</th>
                        <th>ชื่อวิชา</th>
                        <th>อาจารย์ ผู้สอน</th>
                        <th>สถานะการเข้าเรียน</th>
                        <th>เวลาเข้าเรียน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($checkins as $checkins)
                        <tr>
                            <td>{{ $checkins->id }}</td>
                            <td>{{ $checkins->stud_id }}</td>
                            <td>{{ $checkins->subject_id }}</td>
                            <td>{{ $checkins->subject_name }}</td>
                            <td>{{ $checkins->teacher }}</td>
                            <td>{{ $checkins->status_check }}</td>
                            <td>{{ $checkins->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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