<function name="IsSlowEscape" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether the survivors would currently count as having made a slow escape, i.e. the round time (see <page>SlashCo.GetRoundTime</page>) has exceeded `SlashCo.SlowEscapeTime` (1200 seconds by default).
	</description>
	<realm>Shared</realm>
	<group>Round</group>
	<rets>
		<ret name="isSlow" type="boolean">Whether the current round time counts as a slow escape</ret>
	</rets>
</function>