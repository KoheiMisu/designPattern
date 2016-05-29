<?php

require __DIR__ . "/../vendor/autoload.php";

use Iterator\FriendBean;
use Iterator\Friends;
use Iterator\ProgrammerIterator;

$friends = new Friends();
$friends->add(new FriendBean('Mizky', 28, 'PROGRAMMER'));
$friends->add(new FriendBean('Yoshida',30, 'POLICEMAN'));
$friends->add(new FriendBean('sho322', 28, 'PROGRAMMER'));
$friends->add(new FriendBean('Mita', 29, 'ELEKIMEN'));

$iterator = $friends->getIterator();

/**
 * 全件表示
 */

//iterator=>validは現在位置が有効かどうかを調べるメソッド。
while ($iterator->valid()) {
	$friendBean = $iterator->current();
	printf('%s (%d, %s)',
			$friendBean->getName(),
			$friendBean->getAge(),
			$friendBean->getJob()
	);
    echo "\n";
	$iterator->next();
}



echo '--------------------------------';
echo "\n";


/**
 * ProgrammerIteratorを使って
 * PROGRAMMERのみ表示
 */
// $iterator->rewind(); //foreachの最初にコールされるのでいらない？
$progIterator = new ProgrammerIterator($iterator);

// var_dump($progIterator);

foreach ($progIterator as $friendBean) {
	printf('%s (%d, %s)',
			$friendBean->getName(),
			$friendBean->getAge(),
			$friendBean->getJob()
	);
    echo "\n";
}
