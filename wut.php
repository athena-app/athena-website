$file_contents = file_get_contents('topictree.json');

$ka = json_decode($file_contents);
$read = true;

//foreach ($ka->children as $subject_parsed) {
if (true) {
    $subject_parsed = $ka-children[0];
    if (property_exists($subject_parsed, 'children')) {

        foreach ($subject_parsed->children as $topic_parsed) {
            if (property_exists($topic_parsed, 'children')) {

                foreach ($topic_parsed->children as $subtopic_parsed) {
                    if (property_exists($subtopic_parsed, 'children')) {

                        foreach ($subtopic_parsed->children as $obj_one_parsed) {
                            if (property_exists($obj_one_parsed, 'children')) {

                                foreach ($obj_one_parsed->children as $obj_two_parsed) {
                                    if (property_exists($obj_two_parsed, 'download_urls')) {

                                        $subject = Subject::where('name', $subject_parsed->title);

                                        if (is_null($subject)) {
                                            $subject = new Subject;
                                            $subject->name = $subject_parsed->title;
                                            $subject->save();
                                        }

                                        $topic = Topic::where('name', $topic_parsed->title);

                                        if (is_null($topic)) {
                                            $topic = new Topic;
                                            $topic->subject_id = $subject->id;
                                            $topic->name = $topic_parsed->title;
                                            $topic->save();
                                        }

                                        $subtopic = Subtopic::where('name', $subtopic_parsed->title);

                                        if (is_null($subtopic)) {
                                            $subtopic = new Subtopic;
                                            $subtopic->topic_id = $topic->id;
                                            $subtopic->name = $subtopic_parsed->title;
                                            $subtopic->save();
                                        }

                                        $lesson = Lesson::where('name', $obj_one_parsed->title . ' - ' . $obj_two_parsed->title);

                                        if (is_null($lesson)) {
                                            $lesson = new Lesson;
                                        }

                                        $lesson->subtopic_id = $subtopic->id;
                                        $lesson->name = $obj_one_parsed->title . ' - ' . $obj_two_parsed->title;
                                        $lesson->video_url = $obj_two->download_urls->mp4;
                                        $lesson->description = $obj_two->description;
                                        $lesson->keywords = $obj_two->keywords;
                                        $lesson->save();

                                        print "Added '" . $lesson->name . " (" . $lesson->id . ")\n\n";

                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
