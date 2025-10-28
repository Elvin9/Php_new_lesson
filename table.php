<?php
    $people = [
        ['section' => "Listening", 'score' => 8.5, 'remarks' => "goood comprehension"],
        ['section' => "Reading", 'score' => 7.5, 'remarks' => 'Excellents'],
        ['section' => "Writing	", 'score' => 6.5, 'remarks' => "clearity is so good"],
    ];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
  <h2 class="text-2xl font-semibold mb-4 text-gray-800">My IELTS Results</h2>

  <div class="overflow-x-auto">
    <table class="min-w-full border-collapse text-left text-sm">
      <thead>
        <tr class="bg-blue-500 text-white">
          <th class="px-6 py-3 font-semibold rounded-tl-xl">Section</th>
          <th class="px-6 py-3 font-semibold">Score</th>
          <th class="px-6 py-3 font-semibold rounded-tr-xl">Remarks</th>
        </tr>
      </thead>
   
      <tbody class="divide-y divide-gray-200">
           <?php foreach($people as $item): ?>
        <tr class="hover:bg-blue-50 transition">
          <td class="px-6 py-3 font-medium text-gray-700"><?= $item['section'] ?></td>
          <td class="px-6 py-3 text-gray-600"><?= $item['score'] ?></td>
          <td class="px-6 py-3 text-gray-600"><?= $item['remarks'] ?></td>
        </tr>
      <?php endforeach; ?>
      </tfoot>
    </table>
  </div>
</div>
</body>
</html>