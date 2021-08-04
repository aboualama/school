<?php





$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf::setRTL(true);
        $pdf::SetMargins(7, 20, 7);

        //set font
        $header = $system_name . " \n شؤون التعليم و ".trans('term.the_students')." ";
        // set default header data
        $pdf::SetHeaderData(PDF_HEADER_LOGO, 20, 'جامعة الأزهر', $header, array(0, 0, 255), array(0, 64, 128));
        $pdf::setFooterData(array(0, 64, 0), array(0, 64, 128));

        // set header and footer fonts
        $pdf::setHeaderFont(array('aealarabiya', '', 12));
        $pdf::setFooterFont(array(PDF_FONT_NAME_DATA, '', 5));

//        $pdf::SetAutoPageBreak(TRUE, 1);

        // set default monospaced font
        $pdf::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        // set margins
        $pdf::SetHeaderMargin(3);
        $pdf::SetFooterMargin(3);
        $pdf::SetFont('arialbd', '', 13, '', false);
        $pdf::AddPage();

        $html = '
        
        <style>
    .border {
        border: 1px solid black;
    }

    .header-th-color {
        text-align: center;
        background-color: #FFCA08;
        height: 20px;
        font-size: 14px;
        line-height: 1.2;
    }
    .header-td-color{
        text-align: center;
        background-color: #FFCA08;
        height: 18px;
        line-height: 1.6;
    }
    .body-td{
        text-align: center;
        font-size: 10px;
        line-height: 1.5;
    }
              </style>
                            <table  >
                                <thead>
                                    <tr>
                                        <th colspan="3" style="text-align:center; font-weight: bold;font-size: 14px"><h1>' . $name_PDP . ' </h1></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td colspan="3" height="10px" style="text-align: center;color: #2b542c"><h3> للعام الجامعى ' . arabic_number($running_year) . 'م</h3></td>
                                    </tr>
                                    <tr >
                                        <td style="text-align: center"><h3>'.$class_name.'</h3></td>
                                        <td style="text-align: center"><h3>شعبة '.$section_name.'</h3></td>
                                        <td style="text-align: center"><h3>عدد '.trans('term.the_students').'('.$this->arabic_number($count_students).')'.' </h3></td>
                                    </tr>
                                    <tr >
                                        <td ></td>
                                        <td style="text-align: left" >'.$request->time.'</td>
                                        <td style="text-align: right" >('.$time.')</td>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                </tbody>
                            </table>';

                    $html .= '<table border="1" >
                                  <thead>
                                    <tr >
                                        <th class="header-th-color" width="80px">رقم اللجنة</th>
                                        <th class="header-th-color" width="70px">من رقم جلوس </th>
                                        <th class="header-th-color" width="70px">إلى رقم جلوس </th>
                                        <th class="header-th-color" width="30px" style="font-size: 10px">عدد '.trans('term.the_students').'</th>
                                        <th class="header-th-color" width="210px">المكان</th>
                                        <th class="header-th-color" width="100px">المذهب</th>
                                    </tr>
                                  </thead>
                                  <tbody>';

        $count = count($committees);

        $split = 1;
        $number = 0;
        $num = 1;

        foreach ($committees as $key => $committee) {
            $start = min(explode(',',$committee->rolls));
            $end = max(explode(',',$committee->rolls));
            $count_capacity = count(explode(',',$committee->rolls));

            $mazhb = DB::table('students')
                ->join('enroll', 'students.student_id', '=', 'enroll.student_id')
                ->join('mazhab', 'students.mazhab_id', '=', 'mazhab.id_mazhab')
                ->where('status_year', '=', 1)
                ->where('status', '=', 1)
                ->where('year', '=', $this->get_settings('running_year'))
                ->whereIn('roll', explode(',', $committee->rolls))
                ->select(['mazhab'])
                ->selectRaw('count(students.name) as count_student')
                ->groupBy('mazhab')->get();

            $html .= '<tr>
                             <td class="header-td-color" width="80px">'.$this->arabic_number($committee->committee_name)  .'</td>
                             <td class="body-td" width="60px" >  ' .$this->arabic_number($start)  . ' </td>
                             <td class="body-td" width="60px" >  ' . $this->arabic_number($end)  . '</td>
                             <td class="body-td" width="30px" style="text-align: center"> ' . $this->arabic_number($count_capacity) . ' </td>
                             <td class="body-td" style="text-align: center" width="200px">' . $this->arabic_number($committee->place) . ' </td>';
                    foreach ($mazhb as $item){
                        $count_cell = 130 /count($mazhb)  ;

                        $html .=' <td class="body-td" style="text-align: center" width="'.$count_cell.'px">' . $this->arabic_number($item->mazhab) .':'. $this->arabic_number($item->count_student).' </td>';

                    }
            $html .='  </tr>';

            if ($split == 25) {
                $html .= '</tbody></table>
            <table >
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <br>
                <tr>
                   <th style="text-align: center; font-size: 14px">رئيس شئون التعليم و '.trans('term.the_students').'</th>
                   <th style="text-align: center; font-size: 14px"></th>
                   <th style="text-align: center; font-size: 14px">يعتمد أ.د/ عميد الكلية</th>
                 </tr>
                 <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                 </tr>
                    </tbody>
              </table>';

                $html .= '
                  <table  >
                                <thead>
                                    <tr>
                                        <th colspan="3" style="text-align:center; font-weight: bold;font-size: 14px"><h1>' . $name_PDP . ' </h1></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td colspan="3" height="10px" style="text-align: center;color: #2b542c"><h3> للعام الجامعى ' . arabic_number($running_year) . 'م</h3></td>
                                    </tr>
                                    <tr >
                                        <td style="text-align: center"><h3>'.$class_name.'</h3></td>
                                        <td style="text-align: center"><h3>شعبة '.$section_name.'</h3></td>
                                        <td style="text-align: center"><h3>عدد '.trans('term.the_students').'('.$this->arabic_number($count_students).')'.' </h3></td>
                                    </tr>
                                    <tr >
                                        <td ></td>
                                        <td style="text-align: left">'.$request->time.'</td>
                                        <td style="text-align: right">('.$time.')</td>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="1" >
                                  <thead>
                                   <tr >
                                        <th class="header-th-color" width="80px">رقم اللجنة</th>
                                        <th class="header-th-color" width="70px">من </th>
                                        <th class="header-th-color" width="70px">إلى </th>
                                        <th class="header-th-color" width="30px" style="font-size: 10px">عدد '.trans('term.the_students').'</th>
                                        <th class="header-th-color" width="310px">المكان</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                ';
                $split = 0;
            }

            if ($number == count($committees) - 1) {
                $html .= '</tbody></table>
            <table >
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <br>
                <tr>
                    <th style="text-align: center; font-size: 14px">رئيس شئون التعليم و '.trans('term.the_students').'</th>
                    <th style="text-align: center; font-size: 14px"></th>
                    <th style="text-align: center; font-size: 14px">يعتمد أ.د/ عميد الكلية</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                    </tbody>
                    </table>';
            }
            $num++;
            $number++;
            $split++;
        }


        $pdf::SetTitle($name_PDP);

        $pdf::writeHTML($html, true, false, false, false, 'center');
        $pdf::Output($name_PDP . '.pdf');
        exit();