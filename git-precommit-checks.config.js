module.exports = {
    display: {
        notifications: true,
        offendingContent: true,
        rulesSummary: false,
        shortStats: true,
        verbose: false,
    },
    rules: [
        {
            message: "Tu as des marqueurs de conflits qui traînent",
            regex: /^[<>|=]{4,}/m,
        },
        {
            message: "Aurais-tu oublié de terminer certaines tâches ?",
            nonBlocking: true,
            regex: /(?:FIXME|TODO)/,
        },
        // JS specific
        {
            filter: /\.js$/,
            message:
                "😫 On dirait que tes auto-imports ont déconné avec les composants ou styles Material-UI",
            regex: /^import \{ .* \} from '@material-ui\//,
        },
        {
            filter: /\*/,
            message:
                '🤔 Hum ! N’as-tu pas oublié de retirer du "console.log(…)" ?',
            nonBlocking: true,
            regex: /^\s*console\.log/,
        },
    ],
};
