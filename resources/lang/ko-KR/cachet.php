<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'last_updated' => '최종 업데이트: 타임 스탬프',
        'status'       => [
            0 => '알 수 없음',
            1 => '정상',
            2 => '성능 이슈',
            3 => '부분 중단',
            4 => '주요 중단',
        ],
        'group' => [
            'other' => '다른 구성 요소',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => '아무 문제도 보고되지 않음',
        'past'         => '이전 문제',
        'stickied'     => '고정된 문제',
        'scheduled'    => '예정된 유지 보수',
        'scheduled_at' => ', :timestamp 에 예정됨',
        'posted'       => '게시 됨 :timestamp',
        'posted_at'    => ':timestamp에 게시됨',
        'status'       => [
            1 => '파악 중',
            2 => '확인됨',
            3 => '주시하는 중',
            4 => '수정됨',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => '예정',
            1 => '진행 중',
            2 => '완료',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]시스템 정상|[2,*]모든 시스템 정상',
        'bad'   => '[0,1] The system is experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The system is experiencing major issues|[2,Inf] Some systems are experiencing major issues',
    ],

    'api' => [
        'regenerate' => 'API Key 재생성',
        'revoke'     => 'API Key 폐지',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '1시간 이내',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => '최신 업데이트를 받아 보기 위한 구독신청.',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => '구독',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'no_subscriptions' => '당신은 모든 업데이트를 구독하고 있습니다',
            'my_subscriptions' => '당신은 다음 업데이트를 구독하고 있습니다',
            'manage_at_link'   => ':link에서 구독을 관리할 수 있음',
        ],
        'email' => [
            'subscribe'          => '이메일 구독 신청.',
            'subscribed'         => '이메일 구독 신청이 완료되었습니다. 구독 신청 확인을 위한 이메일을 확인해주세요.',
            'verified'           => '이메일 구독이 확인 되었습니다. 감사합니다!',
            'manage'             => '구독 관리',
            'unsubscribe'        => '이메일 구독 취소',
            'unsubscribed'       => '이메일 구독이 취소 되었습니다.',
            'failure'            => '구독 신청 중에 문제가 발생했습니다.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
        ],
    ],

    'signup' => [
        'title'    => '가입',
        'username' => '사용자이름',
        'email'    => '이메일',
        'password' => '비밀번호',
        'success'  => '계정이 생성되었습니다.',
        'failure'  => '가입 중에 문제가 생겼습니다.',
    ],

    'system' => [
        'update' => 'Cachet 새 버전이 나왔습니다. 업데이트 방법은 <a href="https://docs.cachethq.io/docs/updating-cachet"> 여기서 </a>확인할 수 있습니다!',
    ],

    // Modal
    'modal' => [
        'close'     => '닫기',
        'subscribe' => [
            'title'  => '구성 요소 업데이트를 구독',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => '구독',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => ':date에 발생한 :name에 대한 자세한 정보와 업데이트',
            'schedule'  => ':startDate에 시작하는 계획된 :name 점검에 대한 자세한 정보',
            'subscribe' => ':app을 구독해서 사고와 예정된 점검에 대해서 받아볼 수 있음',
            'overview'  => ':app의 최신 상태 업데이트를 받아보세요.',
        ],
    ],

    // Other
    'home'            => '홈',
    'powered_by'      => '<a href="https://cachethq.io" class="links">Cachet</a>에 의해 제공됩니다.',
    'timezone'        => '시간은 :timezone을 기준으로 표시됩니다.',
    'about_this_site' => '이 사이트에 대해',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => '상태 ',

];
