<?php
    
    $messages = array(
        1 => 'I need a lawyer to answer that.', 
        2 => 'You should do that and put it on your tumblr.', 
        3 => 'When pigs fly.',
        4 => "What's the worst that could happen?",
        5 => 'I plead the fifth.',
        6 => 'What, you don\'t know?.',
        7 => 'Didn\'t the White Stripes do a cover of that question?',
        8 => 'Your jeans aren\'t tight enough for me to answer that question.',
        9 => 'Maybe, if you wear enough plaid.',
        10 => 'Put on a little plaid and curl your ironic mustache to ensure positive outcome.',
        11 => 'Depends. Did you go to Burning Man?',
        12 => 'Yes, because you live in a Dogpatch loft.',
        13 => 'Only if you get a fixie',
        14 => 'No doy.',
        15 => 'Are PBR\'s tastier in Dolores Park?',
        16 => 'What do I look like, an Atari??',
        17 => 'It\'s as likely as snow in San Francisco.',
        18 => 'No, but there\'s a yoga pose for that.',
        19 => 'How funny, I know a guy who\'s going a startup about that.',
        20 => 'Shhhh! Only people in the Mission are supposed to know about that.',
        21 => 'That depends...is it compostable?',
        22 => 'No, and it\'s Muni\'s fault.',
        23 => 'Yes, and you can blame it on Muni.',
        24 => 'Frank Chu says you should ELMSFORD 12 GALAXIES CESJROGENICAL ERGONOMICS STRATOSPHERICAL.',
        25 => 'Ask Gavin Newsom\'s hair.',
        26 => 'I can\'t commit to an answer because I\'m a Californian.',
        27 => 'Ask your iPhone. Because you definitely have one.',
        28 => 'I was giving answers before people were even asking questions.',
        29 => 'Only if it\'s locally sourced.',
        30 => 'What an ironic question. Don\'t be such a hipster.',
        31 => 'It\'s been done.',
        32 => 'Are there strollers in Noe Valley?',
        33 => 'What a fratty question. You must live in the Marina.'
    );
    
    $message = $messages[ array_rand($messages,1) ];

	// now greet the sender
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Sms>Hipster Magic 8-Ball says: <?php echo $message ?></Sms>
</Response>