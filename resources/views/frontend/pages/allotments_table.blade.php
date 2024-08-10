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
    ['round'=> 1, 'state_rank'=> 1, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 3, 'state'=> 'Tamil Nadu', 'institute'=> 'COIMBATORE MEDICAL COLLEGE, COIMBATORE', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 5, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 9, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 10, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 11, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 16, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 17, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%'],
    ['round'=> 1, 'state_rank'=> 20, 'state'=> 'Tamil Nadu', 'institute'=> 'MADRAS MEDICAL COLLEGE, CHENNAI', 'course'=> 'MBBS', 'quota'=> 'TN Govt 92.5%']
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
                        <th class="text-nowrap">Round</th>
                        <th class="text-nowrap">State Rank</th>
                        <th class="text-nowrap">State</th>
                        <th class="text-nowrap">Institute</th>
                        <th class="text-nowrap">Course</th>
                        <th class="text-nowrap">Quota</th>
                     </tr>
                  </thead>
                  <tbody>
                    

                     @foreach($temp_list as $temp_data)
                     <tr>
                       
                        <td>
                           {{$temp_data['round']}}
                        </td>
                        <td>
                           {{$temp_data['state_rank']}}
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
                           {{$temp_data['quota']}}
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