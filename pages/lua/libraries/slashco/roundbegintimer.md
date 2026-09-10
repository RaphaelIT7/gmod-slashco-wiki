<function name="RoundBeginTimer" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Starts the round, either right away or after a short countdown, and marks <page>SlashCo.CurRound</page>.AntiLoopSpawn so the round setup cannot run more than once.
	</description>
	<realm>Server</realm>
	<group>Round</group>
	<args>
		<arg name="instant" type="boolean">If true, starts the round immediately instead of waiting for the countdown</arg>
	</args>
</function>
