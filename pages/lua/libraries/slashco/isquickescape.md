<function name="IsQuickEscape" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether the survivors would currently count as having made a quick escape, i.e. the round time (see <page>SlashCo.GetRoundTime</page>) hasn't reached `SlashCo.QuickEscapeTime` (600 seconds by default) yet.
	</description>
	<realm>Shared</realm>
	<group>Round</group>
	<rets>
		<ret name="isQuick" type="boolean">Whether the current round time still counts as a quick escape</ret>
	</rets>
</function>