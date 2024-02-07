<?php

return [
    'questions_and_choices' => [
        [
            'question' => "You went to a party last night and when you arrived to school the next day, everybody is talking about something you didn't do. What will you do?",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Avoid everything and go with your friends'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Go and talk with the person that started the rumors'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Avoid everything and go with your friends'
                    ]
                ]
        ],
        [
            'question' => "What quality do you excel the most?",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Empathy'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Curiosity'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Perseverance'
                    ]
                ]
        ],
        [
            'question' => "You are walking down the street when you see an old lady trying to cross, what will you do?",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Go and help her'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Go for a policeman and ask him to help'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Keep walking ahead'
                    ]
                ]
        ],
        [
            'question' => "You had a very difficult day at school, you will maintain a ____ attitude",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Depends on the situation'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Positive'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Negative'
                    ]
                ]
        ],
        [
            'question' => "You are at a party and a friend of yours comes over and offers you a drink, what do you do?",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Say no thanks'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Drink it until it is finished'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Ignore him and get angry at him'
                    ]
                ]
        ],
        [
            'question' => "You just started in a new school, you will...",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Go and talk with the person next to you'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Wait until someone comes over you'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Not talk to anyone'
                    ]
                ]
        ],
        [
            'question' => "In a typical Friday, you would like to..",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'Go out with your close friends to eat'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'Go to a social club and meet more people'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'Invite one of your friends to your house'
                    ]
                ]
        ],
        [
            'question' => "Your relationship with your parents is..",
            'choices' => [
                    [
                        'weight' => 'a',
                        'details' => 'I like both equally'
                    ],
                    [
                        'weight' => 'b',
                        'details' => 'I like both equally'
                    ],
                    [
                        'weight' => 'c',
                        'details' => 'I like my Mom the most'
                    ]
                ]
        ]
    ],
    'results' => [
        'a' => [
            'value' => 2,
            'description' => "Empathy You are emphatic. You see yourself in someone else's situation before doing decisions. You tend to listen to other's voices."
        ],
        'b' => [
            'value' => 3,
            'description' => "Self-Awareness You are conscious of your own character, feelings, motives, and desires The process can be painful but it leads to greater self-awareness."
        ],
        'c' => [
            'value' => 1,
            'description' => "Self-Management You manage yourself well; You take responsibility for your own behavior and well-being."
        ]
    ]
];
