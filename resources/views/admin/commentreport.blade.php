<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <div style="display: none">
        </div>
        </head>
        <body>
        <input type="button" id="btnPrint" onclick="window.print();" value="พิมพ์หน้านี้" />

        <?php
        echo "วันที่ " . date("d/m/Y") . "<br>";
        
        ?>
        <br>
       {{ Auth::user()->f_name }} {{ Auth::user()->l_name }} 
        <center><h2>รายงานข้อเสนอแนะ</h2></center>
        
            <table>
                    <tr>
                            <th>ข้อเสนอแนะ</th>
                            <th>เวลาส่ง</th>
                        </tr>
                        @foreach($comment as $item)
                        <tr>
                            <td>{{ $item->suggestion }}</td>
                            <td>{{ $item->created_at }}</td>
                        @endforeach
                        </tr>
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