<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <div style="display: none">
    </div>
    </head>
    <body>
    <input type="button" id="btnPrint" onclick="window.print();" value="พิมพ์หน้านี้" />
    <center><h2>รายงานข้อมูลการอนุมัติ</h2></center>
    
        <table>
            <tr>
                <th>รหัสนักศึกษา</th>
                <th>รหัสวิชา</th>
                <th>ห้องเรียน</th>
                <th>อาจารย์ผู้สอน</th>
                <th>Status</th>
             
            </tr>
            @foreach($subject as $subject)
            @foreach($reserved as $reserve)
            <tr>
                <td>{{$subject->stud_id}}</td>
                <td>{{$subject->subject_id}}</td>
                <td>{{$reserve->class_room}}</td>
                <td>{{$reserve->teacher}}</td>
                <td>{{$subject->status_re}}</td>
            
            <tr>
            @endforeach
            @endforeach
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