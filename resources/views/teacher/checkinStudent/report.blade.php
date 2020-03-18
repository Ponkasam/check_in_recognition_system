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
        <center><h2>รายงานข้อมูลรายวิชา</h2></center>
        
        <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>รหัสนักศึกษา</th>
                      <th>ชื่อ</th>
                      <th>นามสกุล</th>
                      <th>รหัสวิชา</th>
                      <th>ชื่อวิชา</th>
                      <th></th>
                      <th>สถานะการเข้าเรียน</th>
                      <th>เวลาเข้าเรียน</th>
                    </tr>
                </thead>
                <tbody>
                      @foreach($checkins as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->stud_id }}</td>
                          <td>{{ $item->f_name }}</td>
                          <td>{{ $item->l_name }}</td>
                          <td>{{ $item->subject_id }}</td>
                          <td>{{ $item->subject_name }}</td>
                          <td>{{ $item->teacher }}</td>
                          <td>{{ $item->status_check }}</td>
                          <td>{{ $item->created_at }}</td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
           
        
            
            
            
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

