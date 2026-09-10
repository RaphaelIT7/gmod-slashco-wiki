<function name="ExperienceToLevel" parent="SlashCo" type="libraryfunc">
	<description>
		Converts a total experience amount into a level.<br>
		Each level requires `SlashCo.LevelPowMultiplier` times more experience than the previous one, starting at `SlashCo.FirstLevelBase`.
	</description>
	<realm>Shared</realm>
	<group>Experience</group>
	<args>
		<arg name="experience" type="number">The total amount of experience.</arg>
	</args>
	<rets>
		<ret name="level" type="number">The calculated level.</ret>
		<ret name="experience" type="number">Leftover experience towards the next level.</ret>
		<ret name="nextLevel" type="number">The amount of experience required to reach the next level.</ret>
	</rets>
</function>