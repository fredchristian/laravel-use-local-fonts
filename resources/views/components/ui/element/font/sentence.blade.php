@aware([
    'size' => 'text-base',
])

@props([
    'text' => [
        'default' => [
            "Lorem ipsum dolor sit amet",
            "Ut enim ad minim veniam",
            "Excepteur sint occaecat cupidatat non proident",
        ],

        'text-5xl' => [
            "Normally, both your asses would be dead as fucking fried chicken",
            "I'm baby master cleanse dreamcatcher glossier",
            "Neutra iPhone praxis",
            "Sorry i was triple muted proceduralize",
            "Let me know if you need me to crack any skulls deploy to production",
        ],

        'text-2xl' => [
            "Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.",

            "The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men",

            "Put a bird on it scenester iceland, tote bag raw denim plaid stumptown bruh",

            "Can we parallel path they have downloaded gmail and seems to be working for now face time",

            "We should have a meeting to discuss the details of the next meeting ramp",
        ],

        'text-base' => [
            "Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.",

            "Butcher swag humblebrag leggings celiac vexillologist kickstarter gluten-free tattooed tacos seitan single-origin coffee everyday carry. Chambray craft beer chartreuse hella sartorial meggings crucifix church-key vegan subway tile pok pok four dollar toast twee jean shorts marfa",

            "I dont care if you got some copy, why you dont use officeipsumcom or something like that ? offline this discussion. Moving the goalposts 360 degree content marketing pool but drop-dead date let's schedule a standup during the sprint to review our kpis."
        ],

        'text-sm' => [
            "The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.",

            "Actually pickled authentic copper mug 8-bit cold-pressed. Post-ironic mukbang intelligentsia edison bulb. 90's single-origin coffee crucifix, vinyl tonx bicycle rights master cleanse heirloom scenester. Portland godard copper mug glossier lo-fi gluten-free. Poutine vice meditation beard, intelligentsia shabby chic hell of. Flexitarian plaid banh mi kitsch forage narwhal praxis whatever",

            "Net net marginalised key performance indicators but UX we need to aspirationalise our offerings but hit the ground running. We've got to manage that low hanging fruit no need to talk to users, just base it on the space calculator table the discussion what the, we are running out of runway. Work flows service as core &innovations as power makes our brand. We need evergreen content cloud native container based, downselect run it up the flagpole, and cannibalize, yet killing it, nor land it in region. Move the needle rock Star/Ninja all hands on deck window of opportunity."
        ]
    ]
])

{{ Arr::random($text[Arr::exists($text, $size) ? $size : 'default' ]) }}
