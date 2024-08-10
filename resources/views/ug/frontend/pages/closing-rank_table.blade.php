@php

function singularize($word)
{
$singular = array (
'/(quiz)zes$/i' => '\1',
'/(matr)ices$/i' => '\1ix',
'/(vert|ind)ices$/i' => '\1ex',
'/^(ox)en/i' => '\1',
'/(alias|status)es$/i' => '\1',
'/([octop|vir])i$/i' => '\1us',
'/(cris|ax|test)es$/i' => '\1is',
'/(shoe)s$/i' => '\1',
'/(o)es$/i' => '\1',
'/(bus)es$/i' => '\1',
'/([m|l])ice$/i' => '\1ouse',
'/(x|ch|ss|sh)es$/i' => '\1',
'/(m)ovies$/i' => '\1ovie',
'/(s)eries$/i' => '\1eries',
'/([^aeiouy]|qu)ies$/i' => '\1y',
'/([lr])ves$/i' => '\1f',
'/(tive)s$/i' => '\1',
'/(hive)s$/i' => '\1',
'/([^f])ves$/i' => '\1fe',
'/(^analy)ses$/i' => '\1sis',
'/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\1\2sis',
'/([ti])a$/i' => '\1um',
'/(n)ews$/i' => '\1ews',
'/s$/i' => '',
);

$uncountable = array('equipment', 'information', 'rice', 'money', 'species', 'series', 'fish', 'sheep');

$irregular = array(
'person' => 'people',
'man' => 'men',
'child' => 'children',
'sex' => 'sexes',
'move' => 'moves');

$lowercased_word = strtolower($word);
foreach ($uncountable as $_uncountable){
if(substr($lowercased_word,(-1*strlen($_uncountable))) == $_uncountable){
return $word;
}
}

foreach ($irregular as $_plural=> $_singular){
if (preg_match('/('.$_singular.')$/i', $word, $arr)) {
return preg_replace('/('.$_singular.')$/i', substr($arr[0],0,1).substr($_plural,1), $word);
}
}

foreach ($singular as $rule => $replacement) {
if (preg_match($rule, $word)) {
return preg_replace($rule, $replacement, $word);
}
}

return $word;
}



$temp_list = [
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "1",
'cr2022_1' => "705",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "COIMBATORE MEDICAL COLLEGE, COIMBATORE",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "1650",
'cr2021_1' => "2",
'cr2022_1' => "705",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "3",
'cr2022_1' => "705",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "4",
'cr2022_1' => "705",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "5",
'cr2022_1' => "705",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "6",
'cr2022_1' => "705",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "7",
'cr2022_1' => "700",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "8",
'cr2022_1' => "700",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "9",
'cr2022_1' => "700",
],
[
'quota' => "Govt 92.5%",
'category' => "BC",
'state' => "Tamil Nadu",
'institute' => "MADRAS MEDICAL COLLEGE, CHENNAI",
'course' => "MBBS",
'fee' => "N/A",
'beds' => "6802",
'cr2021_1' => "10",
'cr2022_1' => "700",
]
]


@endphp


<div class="col-md-12">
   <div class="card mt-3">
      <div class="border-0 card">
         <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th class="text-nowrap">Quota</th>
                        <th class="text-nowrap">Category</th>
                        <th class="text-nowrap">State</th>
                        <th class="text-nowrap">Institute</th>
                        <th class="text-nowrap">Course</th>
                        <th class="text-nowrap">Fee</th>
                        <th class="text-nowrap">Beds</th>
                        <th class="text-nowrap">CR 2021 1</th>
                        <th class="text-nowrap">CR 2022 1</th>
                     </tr>
                  </thead>
                  <tbody>
                    

                     @foreach($temp_list as $temp_data)
                     <tr>
                        <td>
                           {{$temp_data['quota']}}
                        </td>
                        <td>
                           {{$temp_data['category']}}
                        </td>
                        <td>
                           {{$temp_data['state']}}
                        </td>
                        <td>
                           {{$temp_data['institute']}}
                        </td>
                        <td>
                           {{$temp_data['course']}}
                        </td>
                        <td>
                           {{$temp_data['fee']}}
                        </td>
                        <td>
                           {{$temp_data['beds']}}
                        </td>
                        <td>
                           {{$temp_data['cr2021_1']}}
                        </td>
                        <td>
                           {{$temp_data['cr2022_1']}}
                        </td>
                     </tr>
                     @endforeach




                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>